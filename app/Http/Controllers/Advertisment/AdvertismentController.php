<?php

namespace App\Http\Controllers\Advertisment;

use App\Http\Controllers\Controller;
use App\Models\Advertisment;
use App\Models\Area;
use App\Models\Category;
use Illuminate\Http\Request;

class AdvertismentController extends Controller
{
    //
    private $model;
    
    public function __construct(Advertisment $model)
    {
        $this->model = $model;
    }

    public function create()
    {
        $areas = Area::all();
        $categories = Category::all();
        return view('advertisment.create',['areas'=>$areas,'categories'=>$categories]);
    }

    public function getCategory(Request $request){
        $categories = Category::filter($request->all())->get();
        $text = "";
        foreach ($categories as $cat) {
            $name = app()->getLocale() === 'en' ? $cat->name_en : $cat->name_ar;
            $text .= "<option value='$cat->id'>$name</option>";
        }
        return response()->json([
            'text'=>$text,
            'type'=>$request->type,
        ]);
        // return $text;
    }

}
