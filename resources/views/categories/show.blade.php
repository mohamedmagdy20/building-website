@extends('layout.app')
@section('title',"Show Advertisments")
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/advertisment.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/multiImage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/touch-spin.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>

.swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
</style>
@endsection
@section('content')
<section class="ftco-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-12"  data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-content spacing-ads" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl'}}" >
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($advertisment->adsImage as $item)
                                        <div class="swiper-slide"><img src="https://admin.alfuraij.com/uploads/ads/{{$item->image}}" class="img-fluid " alt=""></div>
                                    @endforeach
                                
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                              </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="product_details">
                                {{-- <div class="back">
                                    <span class="material-symbols-outlined">chevron_left</span>
                                   <h6>Back to <a href="{{route('home')}}">Home</a></h6>
                                </div> --}}
                                <h2>{{$advertisment->title}}</h2>
                                <h3>{{$advertisment->price}} د.ك</h3>
                        
                                <div class="about mb-3">
                                    @if ($advertisment->type == 'sale')
                                         <p>@lang('lang.type') : <span class="text-warning">@lang('lang.sale')</span></p>       
                                    @elseif($advertisment->type == 'rent')
                                        <p>@lang('lang.type') : <span class="text-danger">@lang('lang.rent')</span></p>       
                                    @else
                                        <p>@lang('lang.type') : <span class="text-secondary">@lang('lang.instead')</span></p>       
                                    @endif
                                    <p>@lang('lang.area') : <span>{{ app()->getLocale() === 'en' ? $advertisment->area->name_en : $advertisment->area->name_ar}}</span></p>   
                                    <p>@lang('lang.real_estate_type') : <span style="color: #ffb001">{{ app()->getLocale() === 'en' ? $advertisment->category->name_en : $advertisment->category->name_ar }}</span> </p>
                                  
                                    <p>@lang('lang.space_in_meter') : <span style="color: #00004a">{{$advertisment->space}}</span> </p>
                                    <p>@lang('lang.addition_links') : <span><a href="{{$advertisment->links}}" style="color: #00004a">Click Here</a> </span> </p>
                              

                                </div>
                        
                                @if ($advertisment->advantages != null)
                                <ul>
                                    @foreach (array_slice(explode(',',$advertisment->advantages),1)  as $item )
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>      
                                @endif

                                @if ($advertisment->location != null)
                                <ul>
                                    @foreach ( array_slice(explode(',',$advertisment->location),1)  as $item )
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>      
                                @endif

                              


                                <p>{{$advertisment->description}}</p>
                               
                                <a href="https://wa.me/{{$advertisment->user->phone}}" class="btn btn-primary rounded">{{$advertisment->user->phone}} <i class="fa fa-whatsapp text-white" style="font-size: 15px"></i></a>
                                <a href="https://gis.paci.gov.kw/Search/{{$advertisment->number}}" class="btn btn-primary rounded">location</a>
                                
                                    <div class="btn btn-outline-warning rounded">
                                        <span class="material-symbols-outlined">favorite</span></div>
                            </div>
                            
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
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
@endsection