<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Advertisment;
use App\Models\Area;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $model;
    protected $area;
    protected $category;
    public function __construct(Advertisment $model , Category $category , Area $area )
    {
        $this->model = $model;
        $this->category = $category;
        $this->area = $area;
    }
    public function index()
    {
        $data = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('is_expire',0)->take(10)->latest()->get();
        $dataOld = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('is_expire',0)->take(10)->get();
        $dataRent = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('type','rent')->where('is_expire',0)->take(5)->latest()->get(); 
        $dataSale = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('type','sale')->where('is_expire',0)->take(5)->latest()->get(); 
        $dataInstead = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('type','instead')->where('is_expire',0)->take(5)->latest()->get();
        // return $data;
        $areas =$this->area->all();
        $categroy = $this->category->all();
        $advertise = Advertise::all();
        // return app()->getLocale();
        return view('welcome',['data'=>$data,'areas'=>$areas,'dataOld'=>$dataOld,'dataInstead'=>$dataInstead,'dataSale'=>$dataSale,'dataRent'=>$dataRent,'categories'=>$categroy,'advertises'=>$advertise]);
    }

    public function show($id)
    {
        $data = Advertisment::with('adsImage')->with('user')->with('Area')->with('Category')->findOrFail($id);
        // return $data->adsImage;
        $relatedData =  Advertisment::where('type',$data->type)->get();
        return view('advertisment.show',['data'=>$data,'relatedData'=>$relatedData]);
    }
    public function home(Request $request)
    {
        $data = $this->model->with('adsImage')->with('user')->where('abroved',true)->notDraft()->where('is_expire',0)->filter($request->all())->latest()->paginate(6);
        // return $data;
        $areas =$this->area->all();
        $categroy = $this->category->all();
        return view('advertisment.index',['data'=>$data,'areas'=>$areas,'categories'=>$categroy]);
    }

    public function contact()
    {
        return view('contact');
    }


    public function about()
    {
        return view('about');   
    }

    
    public function tip()
    {
        return view('tip');   
    }
    
    public function ai()
    {
        return view('ai');   
    }
    public function create()
    {
        $areas = Area::all();
        $categories = Category::all();
    // return $areas;
        return view('advertisment.create',['areas'=>$areas,'categories'=>$categories]);
    }
    
    public function filterCategory(Request $request)
    {
        $categories = Category::where('type',$request->category)->get();
        $text = "";
        foreach ($categories as $cat) {
            $text .= "<option value='$cat->id'>$cat->name_en</option>";
        }
        return $text;
    }
}
