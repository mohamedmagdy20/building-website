@extends('layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/advertisment.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
{{-- <link rel="stylesheet" href="{{asset('assets/css/multiImage.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/css/touch-spin.css')}}"> --}}
@endsection
@section('body_class','page-template-default page page-id-8 wp-custom-logo rtcl-account rtcl-page rtcl-no-js ehf-header ehf-footer ehf-template-classima ehf-stylesheet-classima header-style-2 footer-style-1 banner-enabled has-sidebar left-sidebar elementor-default elementor-kit-2161 elementor-page elementor-page-8')
@section('content')
<div id="primary" class="content-area classima-myaccount">
    <div class="container">
        <div id="post-8" class="post-8 page type-page status-publish">

            <div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2e91ada3 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
                    data-id="2e91ada3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78c3e29f"
                            data-id="78c3e29f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-50c3004f elementor-widget elementor-widget-shortcode"
                                    data-id="50c3004f" data-element_type="widget"
                                    data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="rtcl">
                                                <form id="rtcl-lost-password-form" action="{{route('check-price')}}"  method="POST"  
                                                    method="post">
                                                    @csrf

                                                    <div class="main-title d-flex flex-column justify-coloumn-center align-items-center">
                                                        <div class="title text-center">
                                                            <span>@lang('lang.real_estate_evaluation')</span>
                                                        </div>
                                                        <div class="description text-center">
                                                            <span>@lang('lang.know_valuation_text')</span>
                                                        </div>
                                                    </div>                                                    <div class="rtcl-form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">@lang('lang.area')</label>
                                                                    <select name="area_id" class="form-control" id="area_id" onchange="elementClick()" required>
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
                                                                    <select name="space" class="form-control" id="space" required>
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
                                                                    <select name="location" class="form-control" id="location" required>
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
                                                                    <select name="street" class="form-control" id="street" required>
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
                                                                    <select name="direction" class="form-control" id="direction" required>
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
                                                                    <select name="rebound" class="form-control" id="rebound" required>
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
                                                                            <input type="radio" name="type" id="land" onclick="removeContent()"  value="land">
                                                                            <label for="land" class="mx-3">
                                                                             @lang('lang.lands')</label>
                            
                                                                             <input type="radio" name="type"  id="build" onclick="showContent()"  value="estate">
                                                                             <label for="build" class="mx-3">
                                                                              @lang('lang.build')</label>
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-md-12 d-none" id="BuildContent">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="age">@lang('lang.age')</label>
                                                                                        <select name="age" class="form-control" id="age" >
                                                                                            <option value="" selected disabled>@lang('lang.age')</option>
                                                                                            <option value="New Building">@lang('lang.new_building')</option>
                                                                                            <option value="1-5 year">1 - 5</option>
                                                                                            <option value="6-10 year">6 - 10</option>
                                                                                            <option value="11-15 year">11 - 15</option>
                                                                                            <option value="16-20 year">16 - 20</option>
                                                                                            <option value="21-25 year">21 - 25</option>
                                                                                            <option value="26-30 year">26 - 30</option>
                                                                                   
                                                                                            <option value="">@lang('lang.do_no_know')</option>
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                            
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="quality">@lang('lang.Finishing_quality')</label>
                                                                                        <select name="quality" class="form-control" id="quality" >
                                                                                            <option value="" selected disabled>@lang('lang.Finishing_quality')</option>
                                                                                            <option value="Luxurious">@lang('lang.luxury_finishing')</option>
                                                                                            <option value="Super Deluxe">@lang('lang.Super Deluxe')</option>
                                                                                            <option value="Deluxe">@lang('lang.Deluxe')</option>
                                                                                            <option value="Commercial">@lang('lang.Commercial')</option>
                                                                                            <option value="">@lang('lang.do_no_know')</option>
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="num_of_floor">@lang('lang.the_number_of_floors')</label>
                                                                                        <select name="num_of_floor" class="form-control" id="num_of_floor" >
                                                                                            <option value="" selected disabled>@lang('lang.the_number_of_floors')</option>
                                                                                            <option value="1 Floor (Ground)">@lang('lang.1 Floor (Ground)')</option>
                                                                                            <option value="1.5 Floors (Ground + Half First floor)">@lang('lang.1.5 Floors (Ground + Half First floor)')</option>
                                                                                            <option value="2 Floors (First Flr)">@lang('lang.2 Floors (First Flr)')</option>
                                                                                            <option value="2.5 Floors (Ground + First + Half Second floor )">@lang('lang.2.5 Floors (Ground + First + Half Second floor )')</option>
                                                                                            <option value="3 Floors (secon Flr)">@lang('lang.3 Floors (secon Flr)')</option>
                                                                                          </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="num_of_floor">@lang('lang.have_basement')</label>
                                                                                        <select name="have_basement" class="form-control" id="have_basement" >
                                                                                            <option value="" selected >@lang('lang.have_basement')</option>
                                                                                            <option value="Have Basement">@lang('lang.have_basement')</option>
                                                                                            <option value="Do not Have Basement">@lang('lang.no_have_basment')</option>
                                                                                          </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                        <h4 class="evtitle" >@lang('lang.location_specs')</h4>
                                                                        <div class="valuation_container">
                                                                            <div class="row">
                                                                                @foreach ($siteSpecifications1 as $item )
                                                                                <div class="col-md-3">
                                                                                    <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                                                    <label for="specifictation-{{$item->id}}" class="mx-3">
                                                                                        {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>                                                                                                  
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                           
                            
                                                                        </div>
                                                                    </div>
                            
                            
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                        <h4 class="evtitle" >@lang('lang.Facing')</h4>
                                                                        <div class="valuation_container">
                                                                            <div class="row">
                                                                                @foreach ($siteSpecifications2 as $item )
                                                                                <div class="col-md-3">
                                                                                    <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                                                    <label for="specifictation-{{$item->id}}" class="mx-3">
                                                                                        {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>       
                                                                                </div>
                                                                                @endforeach

                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                            
                            
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                        <h4 class="evtitle" >@lang('lang.Plot_Specs')</h4>
                                                                        <div class="valuation_container">
                                                                            <div class="row">
                                                                                @foreach ($siteSpecifications3 as $item )
                                                                                <div class="col-md-3">
                                                                                    <input type="checkbox" name="specification[]" id="specifictation-{{$item->id}}"  value="{{$item->id}}">
                                                                                    <label for="specifictation-{{$item->id}}" class="mx-3">
                                                                                        {{ app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</label>       
                                    
                                                                                </div>
                                                                                @endforeach

                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" id="send" class="btn btn-primary rounded">Submit</button>
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
                </section>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function elementClick()
    {
        let element = document.getElementById('element')
        element.classList.remove('d-none');
    }

    function removeContent ()
    {
        let element = document.getElementById('BuildContent')
        element.classList.add('d-none');
    }

    
    function showContent ()
    {
        let element = document.getElementById('BuildContent')
        element.classList.remove('d-none');
    }

    // rtcl-lost-password-form

    $(document).ready(function(){
      $("#rtcl-lost-password-form").submit(function(e){
        e.preventDefault()
        $("#send").html('<i class="fa fa-spinner fa-spin"></i>').prop('disabled', true);



        $.ajax({
                url:'{{route('check-price')}}',
                header:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type:'POST',
                data:new FormData(this),
                processData:false,
                contentType:false,
                success:function(data){
                  console.log(data);                    
                        $("#send").html('@lang('lang.submit')').prop('disabled', false);
                        swal({
                            title: '@lang('lang.result_evaluation')',
                            text: `${data.data.total} KWD`,
                            icon: 'warning',
                            buttons: ["Close", "Yes!"],
                        })
                },
                error:function(data)
                {
                    $("#send").html('@lang('lang.submit')').prop('disabled', false);

                //   console.log(data);    
                    toastr.error('Error Accure');                
                }

            });
      });
  });

</script>
@endsection