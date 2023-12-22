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
        return view('auth.auth');  
    }    
    
    public function login(AuthRequest $request)
    {
        $data =  $request->validated();
        if(Auth::attempt(['phone'=>$data['phone'],'password'=>$data['password']]))
        {
            $user = User::where('phone',$data['phone'])->first();
            // if($user->is_verified == false)
            // {
            //     //  return redirect()->back()->with('error',"Account Is Not Verifed");
            //     return response()->json([
            //         'status'=>412,
            //         'message'=>'Account Is Not Verifed',
            //         'data'=>null
            //     ]);
            // }else{
            //     $user->update([
            //         'notification_token'=>$data['token']
            //     ]);
            //     return response()->json([
            //         'status'=>200,
            //         'message'=>'Welcome',
            //         'data'=>$user
            //     ]);
            // }
            return redirect()->route('home')->with('success',"@lang('lang.welcome')");
           
        }else{
            return redirect()->back()->with('error','Invaild Phone or Password');
            // return response()->json([
            //     'status'=>400,
            //     'message'=>'Invaild Phone or Password',
            //     'data'=>null
            // ]);
        }
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        // return $request->all();
        $data = $request->validated();
        if($request->hasFile('image'))
        {
            $data['image'] = $this->saveFile($request->file('image'),'uploads/users');
        }
        $data['password'] = Hash::make($data['password']);
        if(User::create($data)){
            return redirect()->route('login')->with('success','Registerd Please Make Login');
        }else{
            return redirect()->route('login')->with('error','Error Accure');
        }
    }

    public function verify()
    {
        return view('auth.verify');
    }

    public function checkOtp(Request $request)
    {
        $user = User::where('otp',$request->otp)->first();
        if($user)
        {
            $user->update([
                'is_verified'=>true,
                'otp'=>null
            ]);
            return redirect()->route('login')->with('success','Account Verifed');
        }else{
            return redirect()->back()->with('error','Invaild OTP');
        }
    }

    public function updateFCM(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update([
            'notification_token'=>$request->token
        ]);
        return response()->json([
            'status'=>200,
            'message'=>'Done',
            'data'=>$user
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->back()->with('success','Logout Succesfuly');
    }
}
