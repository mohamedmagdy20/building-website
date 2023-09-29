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
                                    <p class="breadcrumbs"><span class="mr-2"><a>@lang('lang.register')<i class="fa fa-chevron-right"></i></a></span> <span> 
                                    <a href="{{route('home')}}">@lang('lang.main')</a><i class="fa fa-chevron-right"></i></span></p>
                                    <h1 class="mb-0 bread" id="bread">@lang('lang.register')</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt mb-5" id="Register">
    <div class="container">
        <div class="row">
            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-xl-10 align-items-center justify-content-center">
                            <form action="{{route('register')}}" id="user-form" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="login-form-area">
                                    <div class="login-form">
                                   
                                    <div class="login-heading">
                                    <span>@lang('lang.register')</span>
                                    <p>@lang('lang.create_new_account')</p>
                                    </div>
                                    <div class="input-box">
    
                                    <div class="single-input-fields">
                                        <div class="container">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
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
                                            <input class="form-check-input"  type="radio" name="type" value="personal" id="type" checked >
                                            <label class="form-check-label" for="type">
                                             @lang('lang.personal')
                                            </label>
                                          </div>
                                          <div class="form-check  ml-2 mt-1">
                                            <input class="form-check-input" type="radio" name="type" value="company" id="flexRadioCheckedDisabled"  >
                                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                                              @lang('lang.company')
                                            </label>
                                          </div>
                                    </div>
                                    <div class="single-input-fields">
                                        <label>@lang('lang.full_name')</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                                    </div>
                                    
                                    <div class="single-input-fields">
                                        <label>@lang('lang.email') (@lang('lang.optional'))</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="single-input-fields">
                                    <label>@lang('lang.phone')</label>
                                    <input type="text" name="phone" class="form-control" placeholder="+965">
                                    </div>
                                    <div class="single-input-fields">
                                    <label>@lang('lang.password')</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                    </div>
    
                                    <div class="single-input-fields">
                                        <label>@lang('lang.password_confirmation')</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    
                                    <div class="login-footer">
                                    <p>@lang('lang.alerady_have_account') <a href="{{route('login')}}">@lang('lang.login')</a> @lang('lang.here')</p>
                                    <button class="submit-btn3 btn rounded submit-button">@lang('lang.save')</button>
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
<script>
$(document).ready(function(){

$("#user-form").submit(function(e){
    $(".submit-button").html('<i class="fa fa-spinner fa-spin"></i> Adding...').prop('disabled', true);
    e.preventDefault();
    $.ajax({
        url:'https://admin.alfuraij.com/api/handle-register',
        header:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        type:'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,
        success:function(data){
            // console.log(data);
            if(data.status === 200){
                $(".submit-button").html('Save').prop('disabled', false);
                toastr.success(`${data.message}`);



            }else{
                // console.log(data);
                $(".submit-button").html('Save').prop('disabled', false);
                toastr.error(`${data.message}`);
            }
                
        },
        error:function(data)
        {
            console.log(data);
            $(".submit-button").html('Save').prop('disabled', false);
            
            if(data.status == 422){
                // printErrorMsg(data.responseJSON.errors)
                msg = data.responseJSON.errors
                $.each(msg,function(key,value){
                    $(`.${key}_err`).text(value)
                    notyf.open({
                            type: 'error',
                            message: value
                    
                        });
                })
            }

            
        }

    });
});
        
});

</script>
@endsection