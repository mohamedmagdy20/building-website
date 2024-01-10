<?php

namespace App\Http\Controllers\Valuation;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Calculation;
use App\Models\SiteSpecfication;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ValuationController extends Controller
{
    //
    public function index()
    {
        $areas = Area::all();
        $calculations = Calculation::all();
        $siteSpecifications1  = SiteSpecfication::where('type',1)->get();
        $siteSpecifications2  = SiteSpecfication::where('type',2)->get();
        $siteSpecifications3  = SiteSpecfication::where('type',3)->get();

        return view('valuation.index',[
            'areas'=>$areas,
            'calculations'=>$calculations,
            'siteSpecifications1'=>$siteSpecifications1,
            'siteSpecifications2'=>$siteSpecifications2,
            'siteSpecifications3'=>$siteSpecifications3,

        ]);
    }

    public function checkPrice(Request $request)
    {
        $total = 0;
        $data = [];
        $area = Area::findOrFail($request->area_id)->price;
        $space = Calculation::where('key',$request->space)->first();
        $location = Calculation::where('key',$request->location)->first();
        $street = Calculation::where('key',$request->street)->first();
        $direction = Calculation::where('key',$request->direction)->first();
        $rebound = Calculation::where('key',$request->rebound)->first();

        return [
            'area'=>$area,
            'space'=>$space->value,
            'location'=>$location->value,
            'street'=>$street->value,
            'direction'=>$direction->value,
            'reb'=>$rebound->value
        ];
        $adv = 0;
        if($request->adv)
        {
            $adv = Calculation::whereIn('key',$request->adv)->pluck('value')->toArray();  
            $adv = array_sum($adv);          
        }
        $spcification = 0;
        if($request->specification)
        {
            $spcification = SiteSpecfication::whereIn('id',$request->specification)->pluck('price')->toArray();
            $spcification = array_sum($spcification);
        }
        
        $arrSum = $spcification + $adv ;
        $base =  $area * $space->value;
        $total = $base + $location->value + $street->value + $direction->value + $rebound->value + (float)($arrSum) ;
        // return [
        //     'area'=>$area,
        //     'space'=>$space->value,
        //     'total'=>$total,
        //     'arr'=>$arrSum
        // ];
        // $data =[
        //     'area_en'=> $area->name_en,
        //     'area_ar'=>$area->name_en,
        //     'area_value'=>$area->price,

        //     'space'=>$space->key,
        //     'space'=>$space->value,

        //     'location'=>$location->key,
        //     'location_value'=>$location->value,

        //     'street'=>$street->key,
        //     'street'=>$street->value,

        //     'direction'=>$direction->key,
        //     'direction_value'=>$direction->value,

        //     'rebound'=>$rebound->key,
        //     'rebound_value'=>$rebound->value

        // ]
        if(isset($request->age))
        {
            $age = Calculation::where('key',$request->age)->first();
            $total += $age->value;
        }

        if(isset($request->quality))
        {
            $quality = Calculation::where('key',$request->quality)->first();
            $total += $quality->value;
        }

        
        if(isset($request->num_of_floor))
        {
            $num_of_floor = Calculation::where('key',$request->num_of_floor)->first();
            $total += $num_of_floor->value;
        }

        
        if(isset($request->have_basement))
        {
            $have_basement = Calculation::where('key',$request->have_basement)->first();
            $total += $have_basement->value;
        }
        // $data =$request->except('_token');
        // $data['total'] = $total;
        // return $data;
        return response()->json([
            'data'=>[
                'total'=>$total,
                'date'=>Carbon::now()->format('Y-m-d')
            ],
            'status'=>200,
            'message'=>'Success'
        ]);
        // return view('valuation.result',['total'=>$total,'date'=>Carbon::now()->format('Y-m-d')]);       
    }
}
