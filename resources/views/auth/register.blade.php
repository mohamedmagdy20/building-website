@extends('layout.app')
@section('css')
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="profileone.css"> --}}
{{-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.input-box .avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 20px auto;
}
.input-box .avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.input-box .avatar-upload .avatar-edit input {
  display: none;
}
.input-box .avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.input-box .avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.input-box .avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 3px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.input-box .avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.input-box .avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
@endsection
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
                            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                <div class="login-form-area">
                                    <div class="login-form">
                                   
                                    <div class="login-heading">
                                    <span>Reigster</span>
                                    <p>Create New Account</p>
                                    </div>
                                    <div class="input-box">
    
                                    <div class="single-input-fields">
                                        <div class="container">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input"  type="radio" name="type" id="type" checked >
                                            <label class="form-check-label" for="type">
                                             Personal
                                            </label>
                                          </div>
                                          <div class="form-check  ml-2 mt-1">
                                            <input class="form-check-input" type="radio" name="type" id="flexRadioCheckedDisabled"  >
                                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                                              Company
                                            </label>
                                          </div>
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    
                                    <div class="single-input-fields">
                                        <label>Email (optional)</label>
                                        <input type="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="single-input-fields">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="+965">
                                    </div>
                                    <div class="single-input-fields">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                    </div>
    
                                    <div class="single-input-fields">
                                        <label>Password Confirm</label>
                                        <input type="password_confirmation" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    
                                    <div class="login-footer">
                                    <p>Alerady Have Account? <a href="{{route('login')}}">Sign In</a> here</p>
                                    <button class="submit-btn3">Sign Up</button>
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
@section('script')
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});   
</script>
@endsection