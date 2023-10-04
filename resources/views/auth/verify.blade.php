@extends('layout.app')
@section('title','OTP')
@section('css')
<style>
    
.customBtn{
  border-radius:0px;
  padding:10px;
}

form input{
  display:inline-block;
  width:50px;
  height:50px;
  text-align:center;
}
</style>
@endsection

@section('content')
<section class="ftco-section bg-light">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-duration="1000">
        <div class="ftco-content spacing-ads">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center" style="font-size: 25px">
                @lang('lang.verify_otp')
              </div>          
              <form id="OTP-FORM" class="mt-3">
                  @csrf
                 <input type="text" id="otp" class="form-control w-50 m-auto" name="otp" placeholder="XXXXX" value="">
                  <hr class="w-50 m-auto">
                  <div class=" text-center mt-4">
                    <button class='btn btn-primary rounded submit-button'>@lang('lang.check')</button>
                    <a onclick="Resend()" class="btn btn-light">@lang('lang.resend')</a>
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

  function getParameterByName(name, url = window.location.href) {
      name = name.replace(/[\[\]]/g, '\\$&');
      var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
  $(document).ready(function(){
  
  $("#OTP-FORM").submit(function(e){
      $(".submit-button").html('<i class="fa fa-spinner fa-spin"></i> Process...').prop('disabled', true);
      e.preventDefault();
      $.ajax({
          url:'https://admin.alfuraij.com/api/check-otp',
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
                  toastr.success(`${data.message}`);
                  window.location.replace("/");
              }else{
                  // console.log(data);
                  toastr.error(`${data.message}`);
              }
                  
          },
          error:function(data)
          {
              console.log(data);
              if(data.status == 400){
                  msg = data.responseJSON.data
                  $.each(msg,function(key,value){
                       toastr.error(`${key}: ${value}`);
                  })
              }
  
          }
  
      });
    });          
  });
  
  function Resend()
  {
    let phone = getParameterByName('phone');
    console.log(phone);
    if(phone != null && phone != undefined)
    {
      $.ajax({
          url:'https://admin.alfuraij.com/api/resend',
          header:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          },
          type:'POST',
          data:{phone:phone},
          processData:false,
          contentType:false,
          success:function(data){
              // console.log(data);
              if(data.status === 200){
                  toastr.success(`${data.message}`);
                  // window.location.replace("/");
              }
                  
          },
          error:function(data)
          {
              console.log(data.responseJSON.message);
              if(data.responseJSON.status == 404){
                toastr.error(`${data.responseJSON.message}`);
              }
  
          }
  
      });
    }else{
      toastr.error('There is No Phone')
    }
  }
  </script>
  
@endsection