@extends('layout.app')
@section('title','Advertisments')
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
                                    <p class="breadcrumbs"><span class="mr-2"><a> @lang('lang.all_ads') <i class="fa fa-chevron-right"></i></a></span> <span> 
                                    <a href="{{route('home')}}">@lang('lang.main')</a><i class="fa fa-chevron-right"></i></span></p>
                                    <h1 class="mb-0 bread" id="bread">@lang('lang.all_ads')</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                    role="tab" aria-controls="v-pills-1" aria-selected="true">@lang('lang.sale')</a>
                                <a class="nav-link btn rounded" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="v-pills-2" aria-selected="false">@lang('lang.rent')</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <form action="{{route('home.main')}}#Advertisments" method="GET" class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">@lang('lang.key_word')</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input type="text" class="form-control" name="q"
                                                            placeholder="@lang('lang.key_word')">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="type" value="sale">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">@lang('lang.type')</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span
                                                                    class="fa fa-chevron-down"></span></div>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                               <option value="" selected>@lang('lang.choose_type')</option>
                                                                @foreach ($categories as $category )
                                                                    <option value="{{$category->id}}">{{ app()->getLocale() === 'en' ? $category->name_en : $category->name_ar }}</option>
                                                                @endforeach
                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">@lang('lang.area')</label>
                                                    <div class="select-wrap">
                                                        <div class="icon"><span
                                                                class="fa fa-chevron-down"></span></div>
                                                        <select name="area_id" id="area_id" class="form-control">
                                                            <option value="" selected>@lang('lang.choose_area')</option>
                                                            @foreach ($areas as $area )
                                                                <option value="{{$area->id}}">{{ app()->getLocale() === 'en' ? $area->name_en : $area->name_ar}}</option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Price Limit</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span
                                                                    class="fa fa-chevron-down"></span></div>
                                                            <select name id class="form-control">
                                                                <option value>100</option>
                                                                <option value>10,000</option>
                                                                <option value>50,000</option>
                                                                <option value>100,000</option>
                                                                <option value>200,000</option>
                                                                <option value>300,000</option>
                                                                <option value>400,000</option>
                                                                <option value>500,000</option>
                                                                <option value>600,000</option>
                                                                <option value>700,000</option>
                                                                <option value>800,000</option>
                                                                <option value>900,000</option>
                                                                <option value>1,000,000</option>
                                                                <option value>2,000,000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center justify-content-center d-flex">
                                                        <button type="submit" class="btn btn-primary rounded" style="padding: 12px 60px; " >@lang('lang.search')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-performance-tab">
                                    <form action="{{route('home.main')}}#Advertisments" method="GET" class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">@lang('lang.key_word')</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input type="text" class="form-control" name="q"
                                                            placeholder="@lang('lang.key_word')">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="type" value="rent">

                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">@lang('lang.type')</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span
                                                                    class="fa fa-chevron-down"></span></div>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                             <option value="" selected>@lang('lang.choose_type')</option>
                                                                @foreach ($categories as $category )
                                                                    <option value="{{$category->id}}">{{ app()->getLocale() === 'en' ? $category->name_en : $category->name_ar}}</option>
                                                                @endforeach
                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">@lang('lang.area')</label>
                                                    <div class="select-wrap">
                                                        <div class="icon"><span
                                                                class="fa fa-chevron-down"></span></div>
                                                        <select name="area_id" id="area_id" class="form-control">
                                                           <option value="" selected>@lang('lang.choose_area')</option>
                                                            @foreach ($areas as $area )
                                                                <option value="{{$area->id}}">{{ app()->getLocale() === 'en' ? $area->name_en : $area->name_ar}}</option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center justify-content-center d-flex">
                                                        <button type="submit" class="btn btn-primary rounded" style="padding: 12px 60px; " >@lang('lang.search')</button>
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
<section class="ftco-section bg-light" id="Advertisments">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <!-- <span class="subheading" style="c;">Our Properties</span> -->
                <h2 class="mb-4" style="color: #ffb001">@lang('lang.all_ads')</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="row">
                    @foreach ($data as $item )
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="property-wrap">
                            <a href="#" class="img img-property" style="background-image: url(https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}});">
                                {{-- <p class="price"><span class="orig-price">KWD {{$item->price}}</span></p> --}}
                                <p class="love"><span class="love-icon">
                                    @if($item->isFavoriteByUser($item->user_id))
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                        <g filter="url(#filter0_d_416_73)">
                                          <circle cx="22.5" cy="18.5" r="18.5" fill="#ffb001"/>
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
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                        <g filter="url(#filter0_d_416_90)">
                                          <circle cx="22.5" cy="18.5" r="18.5" fill="white"/>
                                        </g>
                                        <path d="M17.75 12C16.4437 12 15.28 12.5462 14.4012 13.4012C13.5462 14.2562 13 15.42 13 16.75C13 18.0563 13.5462 19.22 14.4012 20.0988L22.5 28.1975L30.5987 20.0988C31.4538 19.2438 32 18.08 32 16.75C32 15.4437 31.4538 14.28 30.5987 13.4012C29.7437 12.5462 28.58 12 27.25 12C25.9438 12 24.78 12.5462 23.9013 13.4012C23.0463 14.2562 22.5 15.42 22.5 16.75C22.5 15.4437 21.9538 14.28 21.0988 13.4012C20.2438 12.5462 19.08 12 17.75 12Z" fill="#ffb001"/>
                                        <defs>
                                          <filter id="filter0_d_416_90" x="0" y="0" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_416_90"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_416_90" result="shape"/>
                                          </filter>
                                        </defs>
                                    </svg>
                                    @endif
                                   
                                </span></p>
                                @if ($item->type == 'sale')
                                <p class="type">
                                    <span class="sale-item">{{$item->type}}</span>
                                </p>                                    
                                @elseif($item->type =='rent')
                                <p class="type ">
                                    <span class="rent-item">{{$item->type}}</span>
                                </p>
                                @else
                                <p class="type">
                                    <span class="instead-item">{{$item->type}}</span>
                                </p>
                                @endif

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
                                <span class="location"><i class="ion-ios-pin"></i> {{$item->area->name_en}}</span>
                                {{-- <ul class="property_list mt-3 mb-0">
                                    <li><span class="flaticon-bed"></span>3</li>
                                    <li><span class="flaticon-bathtub"></span>2</li>
                                    <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                                </ul> --}}
                            </div>
                            <a href="#">
                                <div class="price-button">
                                    {{$item->price}} د.ك 
                                </div>
                            
                            </a>
                          </div>
                    </div>  
                    @endforeach

                    <div class="col-md-12 my-4 align-items-center justify-content-center " data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        {{-- {!! $data->links() !!} --}}
                            <ul class="pagination w-25 mx-auto">
                                <!-- Previous Page Link -->
                            
                                <li class="page-item">
                                    <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            
                            
                                <!-- Page Number Links -->
                                @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                                
                                <!-- Next Page Link -->
                                @if ($data->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">&raquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">&raquo;</span>
                                    </li>
                                @endif
                                
                                
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
