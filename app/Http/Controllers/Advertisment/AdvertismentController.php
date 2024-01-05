<?php

namespace App\Http\Controllers\Advertisment;

use App\Http\Controllers\Controller;
use App\Models\AdsFavorite;
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


    public function advertisments(Request $request)
    {
        $data = $this->model->filter($request->all())->latest()->paginate(10);
        return view('advertisment.index',['data'=>$data]);
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

    public function addFav(Request $request)
    {
        AdsFavorite::firstOrCreate([
            'user_id'=>auth()->user()->id,
            'advertisment_id'=>$request->id
        ]);
        return response()->json('Success');
    }



    public function markAsSold($id)
    {
        $data = $this->model->findOrFail($id);
        $data->update([
            'is_sold'=>true
        ]);
        return redirect()->back()->with('success','Item Marked As Sold');
    }

    public function markAsUnSold($id)
    {
        $data = $this->model->findOrFail($id);
        $data->update([
            'is_sold'=>false
        ]);
        return redirect()->back()->with('success','Item Marked As Unsold');
    }
}
