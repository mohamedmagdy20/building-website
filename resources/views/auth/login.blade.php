@extends('layout.app')

@section('content')
<section class="slider-hero">
    <div class="overlay"></div>
    <div class="hero-slider">
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center js-fullheight"
                    style="background-image: url({{asset('assets/images/background.png')}});">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-md-9 pt-5 text-center "  data-aos="fade-up" data-aos-duration="1000">
                                <div id="home-content">
                                    <p class="breadcrumbs"><span class="mr-2"><a>تسجيل الدخول<i class="fa fa-chevron-right"></i></a></span> <span> 
                                    <a href="{{route('home')}}">الصفحة الرئيسية</a><i class="fa fa-chevron-right"></i></span></p>
                                    <h1 class="mb-0 bread" id="bread">سجل دخولك الان</h1>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt mb-5" id="Login">
    <div class="container">
        <div class="row">
            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-search d-flex justify-content-center">
                    {{-- @if(Session::has('error'))
                    <div class="alert alert-danger">
                      {{ Session::get('error')}}
                    </div>
                    @endif --}}
                    <div class="row">
                        <div class="col-xl-10 align-items-center justify-content-center">
                            <form action="{{route('login')}}" method="POST" >
                                @csrf
                                <div class="login-form-area">
                                    <div class="login-form">
                                    
                                    <div class="login-heading">
                                    <span>@lang('lang.login')</span>
                                    <p>@lang('lang.enter_login_details_get_access')</p>
                                    </div>
                                    <div class="input-box">
                                    <div class="single-input-fields">
                                    <label>@lang('lang.phone')</label>
                                    <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="+965">
                                @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror    
                                </div>
                                    <div class="single-input-fields">
                                    <label>@lang('lang.password')</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror        
                                </div>
                                    <div class="single-input-fields login-check">
                                    {{-- <input type="checkbox" id="fruit1" name="keep-log"> --}}
                                    {{-- <label for="fruit1">Keep me logged in</label> --}}
                                    <a href="#" class="f-right">@lang('lang.forget_password')?</a>
                                    </div>
                                    </div>
                                    
                                    <div class="login-footer">
                                    <p>@lang('lang.dont_have_account') <a href="{{route('register.view')}}#Register">@lang('lang.sign_up')</a> @lang('lang.here')</p>
                                    <button type="submit" class="submit-btn3 rounded">@lang('lang.login')</button>
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