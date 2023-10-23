@extends('layout.app')
@section('content')
<section class="ftco-section bg-light" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl'}}">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="main-title d-flex flex-column justify-coloumn-center align-items-center">
                <div class="title text-center">
                    <span>نتيجة التقيم العقاري</span>
                </div>
                <div class="description text-center">
                    <span>{{$date}}</span>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-up" data-aos-duration="500">
                <div class="ftco-content py-5" >
                    <div class="row justify-content-center">
                       <div class="col-md-12 text-center">
                        اجمالي قيمة العقار
                        <h3 style="color: #ff6f4c;font-size: 50px;"> KWD {{$total}} </h3>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection