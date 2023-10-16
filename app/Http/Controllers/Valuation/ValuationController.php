<?php

namespace App\Http\Controllers\Valuation;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Calculation;
use App\Models\SiteSpecfication;
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
        // return $request->all();
        $total = 0;
        $area = Area::findOrFail($request->area_id)->price;
        $space = Calculation::where('key',$request->space)->first();
        $location = Calculation::where('key',$request->location)->first();
        $street = Calculation::where('key',$request->street)->first();
        $direction = Calculation::where('key',$request->direction)->first();
        $rebound = Calculation::where('key',$request->rebound)->first();
        $adv = Calculation::whereIn('key',$request->adv)->pluck('value')->toArray();
        $spcification = SiteSpecfication::whereIn('id',$request->specification)->pluck('price')->toArray();
        $arrSum = array_sum($spcification) + array_sum($adv) ;
        $base =  $area * $space->value;
        $total = $base + $location->value + $street->value + $direction->value + $rebound->value + (float)($arrSum) ;
        return $total;
       
    }
}
