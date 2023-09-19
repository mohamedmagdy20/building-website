@extends('layout.app')
@section('slider-content')
<div class="col-md-9 pt-5 text-center "  data-aos="fade-up" data-aos-duration="1000">
    <div id="home-content">
        <p class="breadcrumbs"><span class="mr-2"><a>تسجيل الدخول<i class="fa fa-chevron-right"></i></a></span> <span> 
        <a href="{{route('home')}}">الصفحة الرئيسية</a><i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread" id="bread">سجل دخولك الان</h1>
    </div>
</div>
@endsection
@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-xl-10 align-items-center justify-content-center">
                            <form action="{{route('login')}}" method="POST" >
                                @csrf
                                <div class="login-form-area">
                                    <div class="login-form">
                                    
                                    <div class="login-heading">
                                    <span>Login</span>
                                    <p>Enter Login details to get access</p>
                                    </div>
                                    <div class="input-box">
                                    <div class="single-input-fields">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="+965">
                                    </div>
                                    <div class="single-input-fields">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="single-input-fields login-check">
                                    {{-- <input type="checkbox" id="fruit1" name="keep-log"> --}}
                                    {{-- <label for="fruit1">Keep me logged in</label> --}}
                                    <a href="#" class="f-right">Forgot Password?</a>
                                    </div>
                                    </div>
                                    
                                    <div class="login-footer">
                                    <p>Don’t have an account? <a href="{{route('register.view')}}">Sign Up</a> here</p>
                                    <button type="submit" class="submit-btn3">Login</button>
                                    </div>
                                    </div>
                                    </div>
                       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection