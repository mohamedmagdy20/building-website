<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Utils\SMS;
use App\Models\User;
use App\Traits\FilesTrait;
use Exception;
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
        $user = User::where('phone',$data['phone'])->first();
        $data['otp'] = $this->generateOtp();
        if($user)
        {
            if(Hash::check($data['password'],$user->password))
            {
                // $message =  'Your Otp is '.$data['otp'];
                // $sms = SMS::sendSms($data['phone'],$message);
                $user->update([
                    'otp'=>$data['otp'], 
                ]);
                return redirect()->route('verify')->with(['success'=>'SMS Sent','phone'=>$user->phone]);
            }else{
                return redirect()->back()->with('error','Invaild Phone or Password');       
            }
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
        return view('verify.verify');
    }

    public function checkOtp(Request $request)
    {
        $user = User::where('otp',$request->otp)->first();
        if($user)
        {
            Auth::login($user,false);
            $user->update([
                'is_verified'=>true,
                'otp'=>null
            ]);
            return redirect()->route('home')->with('success','Welcome Back');
        }else{
            return redirect()->back()->with('error','Invaild OTP');
        }
    }
    public function resend($phone)
    {
        $data['otp'] = $this->generateOtp();
        
        try{
            $message =  'Your Otp is '.$data['otp'];
            $sms = SMS::sendSms($data['phone'],$message);
            $user  = User::where('phone',$phone)->first();
            $user->update([
                'otp'=>$data['otp'],
            ]);
            return redirect()->route('verify.view',$user->phone)->with('success','SMS Sent');
        }catch(Exception $e)
        {
            return $e;
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

    private function generateOtp()
    {
        $otp = rand(10000,99999);
        return $otp;
    }

}
