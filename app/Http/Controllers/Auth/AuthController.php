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

        if(auth()->attempt($request->only(['phone','password'])))
        {
            return redirect()->route('home')->with('success','Welcome');
        }else{
            return redirect()->back()->with('error','Invaild Email or Password');
        }
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
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
}
