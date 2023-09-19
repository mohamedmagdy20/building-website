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
        $data = $this->model->with('adsImage')->with('user')->normal()->notDraft()->notExpire()->take(9)->latest()->get();
        $areas =$this->area->all();
        $categroy = $this->category->all();
        return view('welcome',['data'=>$data,'areas'=>$areas,'categories'=>$categroy]);
    }
}
