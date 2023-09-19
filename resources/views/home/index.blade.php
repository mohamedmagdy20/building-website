@extends('layout.app')
@section('title','Advertisments')
@section('slider-content')
<div class="col-md-9 pt-5 text-center "  data-aos="fade-up" data-aos-duration="1000">
    <p class="breadcrumbs"><span class="mr-2"><a> جميع الاعلانات العقارات <i class="fa fa-chevron-right"></i></a></span> <span> 

    <a href="{{route('home')}}">الصفحة الرئيسية</a><i class="fa fa-chevron-right"></i></span></p>
    <h1 class="mb-0 bread" id="bread">جميع الاعلانات </h1>
</div>
@endsection
@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link btn rounded active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                    role="tab" aria-controls="v-pills-1" aria-selected="true">للبيع</a>
                                <a class="nav-link btn rounded" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="v-pills-2" aria-selected="false">للايجار</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Enter Keyword</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input type="text" class="form-control" name="q"
                                                            placeholder="Enter Keyword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Type</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span
                                                                    class="fa fa-chevron-down"></span></div>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                                @foreach ($categories as $category )
                                                                    <option value="{{$category->id}}">{{ $category->name_en}}</option>
                                                                @endforeach
                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Areas</label>
                                                    <div class="select-wrap">
                                                        <div class="icon"><span
                                                                class="fa fa-chevron-down"></span></div>
                                                        <select name="area_id" id="area_id" class="form-control">
                                                            @foreach ($areas as $area )
                                                                <option value="{{$area->id}}">{{ $area->name_en}}</option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search" 
                                                            class="align-self-stretch form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-performance-tab">
                                    <form action="#" class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Enter Keyword</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input type="text" class="form-control" name="q"
                                                            placeholder="Enter Keyword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Type</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span
                                                                    class="fa fa-chevron-down"></span></div>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                                @foreach ($categories as $category )
                                                                    <option value="{{$category->id}}">{{ $category->name_en}}</option>
                                                                @endforeach
                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Areas</label>
                                                    <div class="select-wrap">
                                                        <div class="icon"><span
                                                                class="fa fa-chevron-down"></span></div>
                                                        <select name="area_id" id="area_id" class="form-control">
                                                            @foreach ($areas as $area )
                                                                <option value="{{$area->id}}">{{ $area->name_en}}</option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search" 
                                                            class="align-self-stretch form-control btn btn-primary">
                                                    </div>
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
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <!-- <span class="subheading" style="c;">Our Properties</span> -->
                <h2 class="mb-4">عقارات مميزة</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="row">
                    @foreach ($data as $item )
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="property-wrap">
                            <a href="#" class="img img-property" style="background-image: url({{asset('uploads/ads/'.$item->adsImage[0]->image)}});">
                                <p class="price"><span class="orig-price">KWD {{$item->price}}</span></p>
                                <p class="love"><span class="love-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                        <g filter="url(#filter0_d_416_73)">
                                          <circle cx="22.5" cy="18.5" r="18.5" fill="#0061E0"/>
                                        </g>
                                        <path d="M17.75 12C16.4437 12 15.28 12.5462 14.4012 13.4012C13.5462 14.2562 13 15.42 13 16.75C13 18.0563 13.5462 19.22 14.4012 20.0988L22.5 28.1975L30.5987 20.0988C31.4538 19.2438 32 18.08 32 16.75C32 15.4437 31.4538 14.28 30.5987 13.4012C29.7437 12.5462 28.58 12 27.25 12C25.9438 12 24.78 12.5462 23.9013 13.4012C23.0463 14.2562 22.5 15.42 22.5 16.75C22.5 15.4437 21.9538 14.28 21.0988 13.4012C20.2438 12.5462 19.08 12 17.75 12Z" fill="white"/>
                                        <defs>
                                          <filter id="filter0_d_416_73" x="0" y="0" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_416_73"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_416_73" result="shape"/>
                                          </filter>
                                        </defs>
                                      </svg>
                                </span></p>

                            </a>
                            <div class="text">
                                <div class="list-team d-flex align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="img" style="background-image: url({{asset('uploads/users/'.$item->user->image)}});"></div>
                                        <h3 class="ml-2">{{$item->user->name}}</h3>
                                    </div>
                                    <span class="text-right">{{$item->updated_at}}</span>
                                </div>
                                <h3><a href="#">{{$item->title}}</a></h3>
                                <span class="location"><i class="ion-ios-pin"></i> {{$item->area->name_en}} <span
                                        class="sale">{{$item->type}}</span></span>
                                {{-- <ul class="property_list mt-3 mb-0">
                                    <li><span class="flaticon-bed"></span>3</li>
                                    <li><span class="flaticon-bathtub"></span>2</li>
                                    <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>      
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
