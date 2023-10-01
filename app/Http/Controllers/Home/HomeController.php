<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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
        $data = $this->model->with('adsImage')->with('user')->notDraft()->where('is_expire',0)->take(6)->latest()->get();
        // return $data;
        $areas =$this->area->all();
        $categroy = $this->category->all();
        return view('welcome',['data'=>$data,'areas'=>$areas,'categories'=>$categroy]);
    }

    public function show($id)
    {
        $advertisment = Advertisment::with('adsImage')->with('user')->with('Area')->with('Category')->findOrFail($id);
        return view(
            'categories.show',
            ['advertisment'=>$advertisment]);
    }
    public function home(Request $request)
    {
        $data = $this->model->with('adsImage')->with('user')->notDraft()->where('is_expire',0)->filter($request->all())->latest()->paginate(9);
        // return $data;
        $areas =$this->area->all();
        $categroy = $this->category->all();
        return view('home.index',['data'=>$data,'areas'=>$areas,'categories'=>$categroy]);
    }
}
