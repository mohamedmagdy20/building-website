@extends('layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/advertisment.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/multiImage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/touch-spin.css')}}">
@endsection
@section('content')
<section class="ftco-section bg-light" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl'}}">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="main-title d-flex flex-column justify-coloumn-center align-items-center">
                <div class="title text-center">
                    <span>تقييم استرشادي - سكن خاص</span>
                </div>
                <div class="description text-center">
                    <span>إعرف قيمة بيتك خلال ثواني</span>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-up" data-aos-duration="500">
                <div class="ftco-content py-5" >
                    <div class="row justify-content-center">
                        <form action="{{route('check-price')}}"  method="POST" id="evaluationForm" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.area')</label>
                                        <select name="area_id" class="form-select" id="area_id" onchange="elementClick()" required>
                                            <option value="" selected disabled>@lang('lang.choose_area')</option>
                                            @foreach ($areas as $item )
                                                <option value="{{$item->id}}">{{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.space_in_meter')</label>
                                        <select name="space" class="form-select" id="space" required>
                                            <option value="" selected disabled>@lang('lang.space_in_meter')</option>
                                            <option value="375 m">375</option>
                                            <option value="400 m">400</option>
                                            <option value="500 m">500</option>
                                            <option value="550 m">550</option>
                                            <option value="600 m">600</option>
                                            <option value="650 m">650</option>
                                            <option value="700 m">700</option>
                                            <option value="750 m">750</option>
                                            <option value="800 m">800</option>
                                            <option value="850 m">850</option>
                                            <option value="900 m">900</option>
                                            <option value="950 m">950</option>
                                            <option value="1000 m">1000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.location')</label>
                                        <select name="location" class="form-select" id="location" required>
                                                <option value="" selected disabled>@lang('lang.location')</option>
                                                <option value="One Street">@lang('lang.one_street')</option>
                                                <option value="Two Street With Front and Back">@lang('lang.two_streets-F+B')</option>
                                                <option value="Two Street With Angle">@lang('lang.Two_streets_on_the_corner')</option>
                                                <option value="Three Street">@lang('lang.three_street')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.street')</label>
                                        <select name="street" class="form-select" id="street" required>
                                                <option value="" selected disabled>@lang('lang.street')</option>
                                                <option value="Internal">@lang('lang.inner_street')</option>
                                                <option value="Inner - Through st">@lang('lang.Inner-Throughst')</option>
                                                <option value="Main Internal">@lang('lang.Major-inner')</option>
                                                <option value="Main Between Two Pices">@lang('lang.Major-2blocks')</option>
                                                <option value="Genral Main Line">@lang('lang.Main')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.direction')</label>
                                        <select name="direction" class="form-select" id="direction" required>
                                                <option value="" selected disabled>@lang('lang.direction')</option>
                                                <option value="North Direction">@lang('lang.North')</option>
                                                <option value="South Direction">@lang('lang.south')</option>
                                                <option value="Eastern Direction">@lang('lang.Eastern')</option>
                                                <option value="Western Direction">@lang('lang.Western')</option>
                                                <option value="">@lang('lang.do_no_know')</option>
                                             </select>
                                    </div>
                                </div>

                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('lang.rebound')</label>
                                        <select name="rebound" class="form-select" id="rebound" required>
                                                <option value="" selected disabled>@lang('lang.direction')</option>
                                                <option value="Less Than 3m">Less Than 3m</option>
                                                <option value="Between 3 and 5 m">3 - 5 m</option>
                                                <option value="Between 6 and 9 m">6 - 9 m</option>
                                                <option value="Between 10 and 14 m">10 - 14 m</option>
                                                <option value="Between 15 and 20 m">15 - 20 m</option>
                                                <option value="Between 21 and 30">21 - 30 m</option>
                                                <option value="Between 31 and 40 m">31 - 40 m</option>
                                                <option value="Between 41 and 50 m">41 - 50 m</option>
                                                <option value="More Than 50">More Than 50 m</option>
                                            </select>
                                    </div>
                                </div>
                                <div id="element" class="d-none" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="valuation_container">
                                                <div class="row">
                                                     {{-- <div class="col-md-3 mt-3"> --}}
                                                       {{-- </div> --}}
                                                     <div class="col-md-3  mb-2">
                                                        
                                                       <input type="checkbox" name="adv[]" id="Has a bus station" value="Has a bus station">
                                                       <label for="Has a bus station">
                                                        <div class="img">
                                                            <img src="{{asset('assets/images/busstop.png')}}" width="30px" height="30px" class="mx-2" alt="">
                                                        </div>
                                                        @lang('lang.has_bus_station')</label>
                                                     </div>
                                                     <div class="col-md-3 mb-2">
                                                        
                                                        <input type="checkbox" name="adv[]" id="Has a lighting pole" value="Has a lighting pole">
                                                        <label for="Has a lighting pole">
                                                         <div class="img">
                                                             <img src="{{asset('assets/images/lightpole.png')}}" width="30px" height="30px" class="mx-2" alt="">
                                                         </div>
                                                         @lang('lang.street_light_pole')</label>
                                                      </div>
                                                      <div class="col-md-3 mb-2">
                                                        <input type="checkbox" name="adv[]" id="Has common rebound" value="Has common rebound">
                                                        <label for="Has common rebound">
                                                         <div class="img">
                                                             <img src="{{asset('assets/images/s3.png')}}" width="30px" height="30px" class="mx-2" alt="">
                                                         </div>
                                                         @lang('lang.shared')</label>
                                                      </div>
        
                                                      <div class="col-md-3 mb-2">
                                                        <input type="checkbox" name="adv[]" id="Has rail" value="Has rail">
                                                        <label for="Has rail">
                                                         <div class="img">
                                                             <img src="{{asset('assets/images/s1.png')}}" width="30px" height="30px" class="mx-2" alt="">
                                                         </div>
                                                         @lang('lang.alley')</label>
                                                      </div>
        
                                                      <div class="col-md-3 mb-2">
                                                        <input type="checkbox" name="adv[]" id="Has Wide rail" value="Has Wide rail">
                                                        <label for="Has Wide rail">
                                                         <div class="img">
                                                             <img src="{{asset('assets/images/s2.png')}}" width="30px" height="30px" class="mx-2" alt="">
                                                         </div>
                                                         @lang('lang.wide_alley')</label>
                                                      </div>
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <h4 class="evtitle" >@lang('lang.Property_condition')</h4>
                                            <div class="valuation_container">
                                                <input type="radio" name="type" id="land"  value="land">
                                                <label for="land" class="mx-3">
                                                 @lang('lang.lands')</label>

                                                 <input type="radio" name="type"  id="build" value="estate">
                                                 <label for="build" class="mx-3">
                                                  @lang('lang.build')</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <h4 class="evtitle" >@lang('lang.location_specs')</h4>
                                            <div class="valuation_container">
                                                @foreach ($siteSpecifications1 as $item )
                                                <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                <label for="specifictation-{{$item->id}}" class="mx-3">
                                                    {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>       
                                                @endforeach

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <hr>
                                            <h4 class="evtitle" >@lang('lang.Facing')</h4>
                                            <div class="valuation_container">
                                                @foreach ($siteSpecifications2 as $item )
                                                <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                <label for="specifictation-{{$item->id}}" class="mx-3">
                                                    {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>       
                                                @endforeach

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <hr>
                                            <h4 class="evtitle" >@lang('lang.Plot_Specs')</h4>
                                            <div class="valuation_container">
                                                @foreach ($siteSpecifications3 as $item )
                                                <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                <label for="specifictation-{{$item->id}}" class="mx-3">
                                                    {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>       
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    function elementClick()
    {
        let element = document.getElementById('element')
        element.classList.remove('d-none');
    }
</script>
@endsection