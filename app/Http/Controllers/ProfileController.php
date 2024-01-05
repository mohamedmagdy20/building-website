<?php

namespace App\Http\Controllers;

use App\Models\AdsFavorite;
use App\Models\Advertisment;
use App\Models\Chat;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $abroveAds  = Advertisment::where('user_id',auth()->user()->id)->where('abroved',true)->count();
        $NotabroveAds  = Advertisment::where('user_id',auth()->user()->id)->where('abroved',false)->count();
        $expireAds  = Advertisment::where('user_id',auth()->user()->id)->where('is_expire',true)->count();
        return view('profile.main',[
            'abroveAds'=>$abroveAds,
            'NotabroveAds'=>$NotabroveAds,
            'expireAds'=>$expireAds
        ]);
    }

    public function listing(Request $request)
    {
        $data = Advertisment::where('user_id',auth()->user()->id)->filter($request->all())->latest()->paginate(8);
        return view('profile.listing',['data'=>$data]);
    }


    public function favouriteListing(Request $request)
    {
        $data = AdsFavorite::where('user_id',auth()->user()->id)->with('advertisments')->latest()->get();
        return view('profile.favourite',['data'=>$data]);
    }

    public function chat()
    {
        $id = auth()->user()->id;
        $chats = Chat::where('user_id',$id)->orWhere('user_to_id',$id)->with('user')->with('message')->get();
        return view('profile.chat',['chats'=>$chats]);
    }

    public function payment()
    {
        return view('profile.payment');
    }

    public function edit()
    {
        return view('profile.edit');
    }

   
    public function deleteAds($id)
    {
        $data = Advertisment::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success','Item Removed From Favourite');
    }

    public function deleteFav($id)
    {
        $data = AdsFavorite::findOrFail($id);
        $data->delete();
        return redirect()->route('profile.favourite')->with('success','Favourite Removed');
    }
}
