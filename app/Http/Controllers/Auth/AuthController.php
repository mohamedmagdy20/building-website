<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    use  FilesTrait;
    public function loginView()
    {
        return view('auth.login');  
    }    
    
    public function login(AuthRequest $request)
    {
        $data =  $request->validated();

        if(Auth::attempt(['phone'=>$data['phone'],'password'=>$data['password']]))
        {
            return redirect()->route('home')->with('success',"@lang('lang.welcome')");
        }else{
            return redirect()->back()->with('error','Invaild Phone or Password');
        }
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        return $request->all();
        $data = $request->validated();
        if($request->hasFile('image'))
        {
            $data['image'] = $this->saveFile($request->file('image'),'uploads/users');
        }
        $data['password'] = Hash::make($data['password']);
        if(User::create($data)){
            return redirect()->route('login')->with('success','Registerd');
        }else{
            return redirect()->route('login')->with('error','Error Accure');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->back()->with('success','Logout Succesfuly');
    }
}
