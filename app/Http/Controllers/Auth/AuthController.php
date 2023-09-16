<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginView()
    {
        return view('auth.login');  
    }    
    
    public function login(AuthRequest $request)
    {
        $data =  $request->validated();

        if(auth()->attempt($request->only(['phone','password'])))
        {
            return redirect()->route('home')->with('success','Welcome');
        }else{
            return redirect()->back()->with('error','Invaild Email or Password');
        }
    }
}
