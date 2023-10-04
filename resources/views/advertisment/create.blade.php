@extends('layout.app')
@section('title',"Add Advertisments")
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/advertisment.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/multiImage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/touch-spin.css')}}">
@endsection
@section('content')
<section class="ftco-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="ftco-content spacing-ads" >
                    <div class="row justify-content-center">
                       <div class="col-md-12">
                        <div class="wrapper" id="Create-Div">
                          <div class="header">
                            <ul>
                              <li class="active form_1_progessbar">
                                <div>
                                  <p>1</p>
                                </div>
                              </li>
                              <li class="form_2_progessbar">
                                <div>
                                  <p>2</p>
                                </div>
                              </li>
                              <li class="form_3_progessbar">
                                <div>
                                  <p>3</p>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <form  id="ads_form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form_wrap" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl'}}">
                              <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                <div class="form_1 data_info">
                                  {{-- <h2>Signup Info</h2> --}}
                                    <div class="form_container">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="input_wrap">
                                            <label for="title">@lang('lang.title')</label>
                                            <input type="text" name="title" required class="form-control" placeholder="@lang('lang.title')" id="title">
                                            @error('title')
                                              <span class="text-danger">{{$message}}</span>
                                            @enderror
                                          </div>
                                        </div>

                                        <div class="col-md-12 mb-3 mt-3">
                                          <label for="">Advertisment Type</label>
                                          <div class="radio_container rounded">
                                            <input type="radio" name="type" id="sale" value="sale" checked>
                                            <label for="sale">@lang('lang.sale')</label>
                                            <input type="radio" name="type" id="rent" value="rent">
                                            <label for="rent">@lang('lang.rent')</label>
                                            <input type="radio" name="type" id="instead" value="instead">
                                            <label for="instead">@lang('lang.instead')</label>
                                          </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="area">@lang('lang.area')</label>
                                          <select name="area_id" required class="select2" id="area_id">
                                            <option value="">@lang('lang.area')</option>
                                            @foreach ($areas as $area )
                                              <option value="{{$area->id}}">{{ app()->getLocale() === 'en' ? $area->name_en : $area->name_ar}}</option>
                                            @endforeach
                                          </select>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                          <label for="cat-type">@lang('lang.real_estate_type')</label>
                                            <select name="cat_type" required class="form-select" id="cat_type" onchange="applyCategory()">
                                             <option value="" selected disabled>@lang('lang.choose_type')</option>
                                              <option value="1">@lang('lang.residential')</option>
                                              <option value="2">@lang('lang.commercial')</option>
                                              <option value="3">@lang('lang.commercial_units')</option>
                                              <option value="4">@lang('lang.investment')</option>
                                              <option value="5">@lang('lang.industrial')</option>
                                              <option value="6">@lang('lang.chalet')</option>
                                              <option value="7">@lang('lang.farm')</option>
                                              <option value="8">@lang('lang.break')</option>
                                              <option value="9">@lang('lang.lands')</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                          <label for="category_id">@lang('lang.real_estate')</label>
                                            <select name="category_id" required class="form-select" id="category_id" onclick="applyType()" >
                                             <option value="" selected disabled>@lang('lang.choose_type')</option>
                                            </select>
                                        </div>
                                      </div>
                                      
                                      
                                      
                                    </div>
                                </div>
                                <div class="form_2 data_info" style="display: none;">
                                    <div class="form_container">
                                      <div class="input_wrap">
                                        <label for="images">@lang('lang.images') (@lang('lang.max_5'))</label>
                                        <input type="file" name="images[]" required max="5" multiple class="form-control" id="images">
                                      </div>
                                      <div class="input-wrap">
                                        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                      </div>
                                    </div>
                                </div>
                                <div class="form_3 data_info" style="display: none;">
                                    <div class="form_container" id="form_3_content">
                                     <div id="default">
                                      <h3 class="text-center text-danger">Please Choose Real Estate Type</h3>
                                     </div>
                                      {{-- <div id="residential" class="d-none">
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.room_num')</label>
                                              <input id="num_of_rooms" type="text" value="" name="num_of_rooms" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.bath_num')</label>
                                              <input id="num_of_bath" type="text" value=""  name="num_of_bath" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>      
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.resciption_num')</label>
                                              <input id="num_of_lounges" type="text" value="" name="num_of_lounges" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                              <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                              <div class="row">
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="furnished" value="@lang('lang.furnished')" >
                                                  <label for="furnished">@lang('lang.furnished')</label>
                                                </div>
                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="private_pool" value="@lang('lang.private_pool')">
                                                  <label for="private_pool">@lang('lang.private_pool')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="central_air-conditioning" value="@lang('lang.central_air-conditioning')">
                                                  <label for="central_air-conditioning">@lang('lang.central_air-conditioning')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="luxury_finishing" value="@lang('lang.luxury_finishing')">
                                                  <label for="luxury_finishing">@lang('lang.luxury_finishing')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="close_to_services" value="@lang('lang.close_to_services')">
                                                  <label for="close_to_services">@lang('lang.close_to_services')</label>
    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="garden" value="@lang('lang.garden')">
                                                  <label for="garden">@lang('lang.garden')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="balcony" value="@lang('lang.balcony')">
                                                  <label for="balcony">@lang('lang.balcony')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="elevator" value="@lang('lang.elevator')">
                                                  <label for="elevator">@lang('lang.elevator')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
 
                                                  <input type="checkbox" name="advantages[]" id="crypt" value="@lang('lang.crypt')">
                                                  <label for="crypt">@lang('lang.crypt')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="head" value="@lang('lang.head')">
                                                  <label for="head">@lang('lang.head')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="health_club" value="@lang('lang.health_club')">
                                                  <label for="health_club">@lang('lang.health_club')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="american_cuisine" value="@lang('lang.american_cuisine')">
                                                  <label for="american_cuisine">@lang('lang.american_cuisine')</label>    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="car_parking" value="@lang('lang.car_parking')">
                                                  <label for="car_parking">@lang('lang.car_parking')</label>
                                                
                                                </div>
                                              </div>
                                           
                                              
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-vv"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        </div>
                                     
                                      </div> --}}

{{-- 
                                      <div id="lands" class="d-none">
                                        <div class="row">
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                            <div class="row">
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="south" value="@lang('lang.south')" checked>
                                                   <label for="south">@lang('lang.south')</label>
                                                 </div>
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="eastern" value="@lang('lang.Eastern')">
                                                   <label for="eastern">@lang('lang.Eastern')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="north" value="@lang('lang.North')">
                                                   <label for="north">@lang('lang.North')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="Street_and_back" value="@lang('lang.Street_and_back')">
                                                   <label for="Street_and_back">@lang('lang.Street_and_back')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="On_the_street" value="@lang('lang.On_the_street')">
                                                   <label for="On_the_street">@lang('lang.On_the_street')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Western" value="@lang('lang.Western')">
                                                   <label for="Western">@lang('lang.Western')</label>
                                                 </div>

                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Three_streets" value="@lang('lang.Three_streets')">
                                                   <label for="Three_streets">@lang('lang.Three_streets')</label>
                                                 </div>

                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Two_streets_on_the_corner" value="@lang('lang.Two_streets_on_the_corner')">
                                                   <label for="Two_streets_on_the_corner">@lang('lang.Two_streets_on_the_corner')</label>
                                                 </div>
                                               
                                               </div>
                                             

                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-res"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        </div>
                                      </div> --}}


                                      
                                      {{-- <div id="barks" class="d-none">
                                        <div class="row">
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                            <div class="row">
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="central_air-bark" value="@lang('lang.central_air')" >
                                                   <label for="central_air-bark">@lang('lang.central_air-conditioning')</label>
                                                 </div>
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="car_parking-bark" value="@lang('lang.car_parking')">
                                                   <label for="car_parking-bark">@lang('lang.car_parking')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="elevator" value="@lang('lang.elevator')">
                                                   <label for="elevator">@lang('lang.elevator')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="Mezzanine" value="@lang('lang.Mezzanine')">
                                                   <label for="Mezzanine">@lang('lang.Mezzanine')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Attic" value="@lang('lang.Attic')">
                                                   <label for="Attic">@lang('lang.Attic')</label>
                                                 </div>
                                               
    
                                               </div>
                                             

                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-bark"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        </div>
                                      </div> --}}

                                      {{-- <div id="architecture" class="d-none">
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.floor_num')</label>
                                              <input id="num_of_rooms" type="text" value="" name="num_of_rooms" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.num_of_apartments')</label>
                                              <input id="num_of_bath" type="text" value="" name="num_of_apartments" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                              <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                              <div class="row">
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="furnished-arch" value="@lang('lang.furnished')" >
                                                  <label for="furnished-arch">@lang('lang.furnished')</label>
                                                </div>
                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="private_pool-arch" value="@lang('lang.private_pool')">
                                                  <label for="private_pool-arch">@lang('lang.private_pool')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="central_air-conditioning-arch" value="@lang('lang.central_air-conditioning')">
                                                  <label for="central_air-conditioning-arch">@lang('lang.central_air-conditioning')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="luxury_finishing-arch" value="@lang('lang.luxury_finishing')">
                                                  <label for="luxury_finishing-arch">@lang('lang.luxury_finishing')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="close_to_services-arch" value="@lang('lang.close_to_services')">
                                                  <label for="close_to_services-arch">@lang('lang.close_to_services')</label>
    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="garden-arch" value="@lang('lang.garden')">
                                                  <label for="garden-arch">@lang('lang.garden')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="balcony-arch" value="@lang('lang.balcony')">
                                                  <label for="balcony-arch">@lang('lang.balcony')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="elevator-arch" value="@lang('lang.elevator')">
                                                  <label for="elevator-arch">@lang('lang.elevator')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
 
                                                  <input type="checkbox" name="advantages[]" id="crypt-arch" value="@lang('lang.crypt')">
                                                  <label for="crypt-arch">@lang('lang.crypt')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="head-arch" value="@lang('lang.head')">
                                                  <label for="head-arch">@lang('lang.head')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="health_club-arch" value="@lang('lang.health_club')">
                                                  <label for="health_club-arch">@lang('lang.health_club')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="american_cuisine-arch" value="@lang('lang.american_cuisine')">
                                                  <label for="american_cuisine-arch">@lang('lang.american_cuisine')</label>    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="car_parking-arch" value="@lang('lang.car_parking')">
                                                  <label for="car_parking-arch">@lang('lang.car_parking')</label>
                                                
                                                </div>
                                              </div>
                                           
                                              
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-arch"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        </div>
                                     
                                      </div> --}}
                                    </div>
                                </div>
                              
                            </div>
                            <input type="hidden" value="eaOZO0IlV6v1RCfh8GV4d858a0ZDqAnp4Gr5mUsFh77LAbNH5XVlD8hkYANFOf6i" name="access_token">
                              <div class="btns_wrap">
                                <div class="common_btns form_1_btns">
                                  <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                                </div>
                                <div class="common_btns form_2_btns" style="display: none;">
                                  <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                                  <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                                </div>
                                <div class="common_btns form_3_btns" style="display: none;">
                                  <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                                  <button type="submit" class="btn_done">Done</button>
                                </div>
                              </div>
                            </div>

                        </form>
                        
                        {{-- <div class="modal_wrapper">
                          <div class="shadow"></div>
                          <div class="success_wrap">
                            <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                            <p>You have successfully completed the process.</p>
                          </div>
                        </div> --}}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="{{asset('assets/js/advertisment.js')}}"></script>
<script src="{{asset('assets/js/multiImages.js')}}"></script>
<script src="{{asset('assets/js/touch-spin.js')}}"></script>
<script src="{{asset('assets/js/create.js')}}"></script>
<script>
    // let lands = document.getElementById('lands');
    // let residential = document.getElementById('residential');
    // let barks = document.getElementById('barks');
    // let architecture = document.getElementById('architecture');
    let form_content = document.getElementById('form_3_content');
    let dd = document.getElementById('default');

   function applyCategory()
   {
        let type = $("#cat_type").find(":selected").val()  
        
        $.ajax({
            type: 'GET',
            url: `{{route('get-categories')}}`,
            data: {
                type: type
            },
            success: function(data) {
              // console.log(data);

                $("#category_id").html(data.text);
                if(data.type == '5'  || data.type == '7' || data.type == '8' || data.type == '9')
                {
                  
                  form_content.replaceChildren()
                  form_content.innerHTML = `
                  <div id="lands">
                                        <div class="row">
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                            <div class="row">
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="south" value="@lang('lang.south')" checked>
                                                   <label for="south">@lang('lang.south')</label>
                                                 </div>
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="eastern" value="@lang('lang.Eastern')">
                                                   <label for="eastern">@lang('lang.Eastern')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="north" value="@lang('lang.North')">
                                                   <label for="north">@lang('lang.North')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="Street_and_back" value="@lang('lang.Street_and_back')">
                                                   <label for="Street_and_back">@lang('lang.Street_and_back')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="On_the_street" value="@lang('lang.On_the_street')">
                                                   <label for="On_the_street">@lang('lang.On_the_street')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Western" value="@lang('lang.Western')">
                                                   <label for="Western">@lang('lang.Western')</label>
                                                 </div>

                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Three_streets" value="@lang('lang.Three_streets')">
                                                   <label for="Three_streets">@lang('lang.Three_streets')</label>
                                                 </div>

                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Two_streets_on_the_corner" value="@lang('lang.Two_streets_on_the_corner')">
                                                   <label for="Two_streets_on_the_corner">@lang('lang.Two_streets_on_the_corner')</label>
                                                 </div>
                                               
                                               </div>
                                             

                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-res"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        </div>
                                      </div>
                  `
                  dd.classList.add('d-none')


                }else if(data.type == '1' || data.type == '6' ){
                  form_content.replaceChildren()
                  form_content.innerHTML = `
                  <div id="residential">
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.room_num')</label>
                                              <input id="num_of_rooms" type="text" value="" name="num_of_rooms" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.bath_num')</label>
                                              <input id="num_of_bath" type="text" value=""  name="num_of_bath" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>      
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.resciption_num')</label>
                                              <input id="num_of_lounges" type="text" value="" name="num_of_lounges" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                              <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                              <div class="row">
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="furnished" value="@lang('lang.furnished')" >
                                                  <label for="furnished">@lang('lang.furnished')</label>
                                                </div>
                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="private_pool" value="@lang('lang.private_pool')">
                                                  <label for="private_pool">@lang('lang.private_pool')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="central_air-conditioning" value="@lang('lang.central_air-conditioning')">
                                                  <label for="central_air-conditioning">@lang('lang.central_air-conditioning')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="luxury_finishing" value="@lang('lang.luxury_finishing')">
                                                  <label for="luxury_finishing">@lang('lang.luxury_finishing')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="close_to_services" value="@lang('lang.close_to_services')">
                                                  <label for="close_to_services">@lang('lang.close_to_services')</label>
    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="garden" value="@lang('lang.garden')">
                                                  <label for="garden">@lang('lang.garden')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="balcony" value="@lang('lang.balcony')">
                                                  <label for="balcony">@lang('lang.balcony')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="elevator" value="@lang('lang.elevator')">
                                                  <label for="elevator">@lang('lang.elevator')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
 
                                                  <input type="checkbox" name="advantages[]" id="crypt" value="@lang('lang.crypt')">
                                                  <label for="crypt">@lang('lang.crypt')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="head" value="@lang('lang.head')">
                                                  <label for="head">@lang('lang.head')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="health_club" value="@lang('lang.health_club')">
                                                  <label for="health_club">@lang('lang.health_club')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="american_cuisine" value="@lang('lang.american_cuisine')">
                                                  <label for="american_cuisine">@lang('lang.american_cuisine')</label>    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="car_parking" value="@lang('lang.car_parking')">
                                                  <label for="car_parking">@lang('lang.car_parking')</label>
                                                
                                                </div>
                                              </div>
                                           
                                              
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-vv"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        </div>
                                     
                                      </div>
                  `
                  dd.classList.add('d-none')


                }else if(data.type == '2' || data.type == '3' )
                {
                  form_content.replaceChildren()
                  form_content.innerHTML = `
                  <div id="barks" >
                                        <div class="row">
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                            <div class="row">
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="central_air-bark" value="@lang('lang.central_air')" >
                                                   <label for="central_air-bark">@lang('lang.central_air-conditioning')</label>
                                                 </div>
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="car_parking-bark" value="@lang('lang.car_parking')">
                                                   <label for="car_parking-bark">@lang('lang.car_parking')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="elevator" value="@lang('lang.elevator')">
                                                   <label for="elevator">@lang('lang.elevator')</label>
                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">

                                                   <input type="checkbox" name="advantages[]" id="Mezzanine" value="@lang('lang.Mezzanine')">
                                                   <label for="Mezzanine">@lang('lang.Mezzanine')</label>

                                                 </div>
                                               
                                                 <div class="col-md-3 mt-3">
                                                   <input type="checkbox" name="advantages[]" id="Attic" value="@lang('lang.Attic')">
                                                   <label for="Attic">@lang('lang.Attic')</label>
                                                 </div>
                                               
    
                                               </div>
                                             

                                             </div>
                                          </div>

                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-bark"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        </div>
                                      </div>
                  `
                  dd.classList.add('d-none')
                }

              $("input[class='touchspin']").TouchSpin();
               
            },
            error: function(error) {
                console.log('error');
            }
        });
    }

    function applyType(){
          let Cattype = $('#category_id').find(":selected").val()

          if(Cattype == '27')
                {
                  form_content.replaceChildren()
                  form_content.innerHTML = `
                  <div id="residential" >
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.room_num')</label>
                                              <input id="num_of_rooms" type="text" value="" name="num_of_rooms" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.bath_num')</label>
                                              <input id="num_of_bath" type="text" value=""  name="num_of_bath" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>      
                                          <div class="col-md-4 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.resciption_num')</label>
                                              <input id="num_of_lounges" type="text" value="" name="num_of_lounges" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                              <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                              <div class="row">
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="furnished" value="@lang('lang.furnished')" >
                                                  <label for="furnished">@lang('lang.furnished')</label>
                                                </div>
                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="private_pool" value="@lang('lang.private_pool')">
                                                  <label for="private_pool">@lang('lang.private_pool')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="central_air-conditioning" value="@lang('lang.central_air-conditioning')">
                                                  <label for="central_air-conditioning">@lang('lang.central_air-conditioning')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="luxury_finishing" value="@lang('lang.luxury_finishing')">
                                                  <label for="luxury_finishing">@lang('lang.luxury_finishing')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="close_to_services" value="@lang('lang.close_to_services')">
                                                  <label for="close_to_services">@lang('lang.close_to_services')</label>
    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="garden" value="@lang('lang.garden')">
                                                  <label for="garden">@lang('lang.garden')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="balcony" value="@lang('lang.balcony')">
                                                  <label for="balcony">@lang('lang.balcony')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="elevator" value="@lang('lang.elevator')">
                                                  <label for="elevator">@lang('lang.elevator')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
 
                                                  <input type="checkbox" name="advantages[]" id="crypt" value="@lang('lang.crypt')">
                                                  <label for="crypt">@lang('lang.crypt')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="head" value="@lang('lang.head')">
                                                  <label for="head">@lang('lang.head')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="health_club" value="@lang('lang.health_club')">
                                                  <label for="health_club">@lang('lang.health_club')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="american_cuisine" value="@lang('lang.american_cuisine')">
                                                  <label for="american_cuisine">@lang('lang.american_cuisine')</label>    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="car_parking" value="@lang('lang.car_parking')">
                                                  <label for="car_parking">@lang('lang.car_parking')</label>
                                                
                                                </div>
                                              </div>
                                           
                                              
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-vv"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        </div>
                                     
                                      </div>
                  `
                  dd.classList.add('d-none')
                }else if(Cattype == '28')
                {
                  form_content.replaceChildren()
                  form_content.innerHTML = `
                  <div id="architecture">
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.floor_num')</label>
                                              <input id="num_of_rooms" type="text" value="" name="num_of_rooms" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                              <label class="form-label">@lang('lang.num_of_apartments')</label>
                                              <input id="num_of_bath" type="text" value="" name="num_of_apartments" class="touchspin" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary">
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="space">@lang('lang.space')</label>
                                            <input type="number" name="space" id="space" placeholder="@lang('lang.space_in_meter')" class="form-control">
                                          </div>
                                          <div class="col-md-12 mb-3">
                                              <label for="">@lang('lang.advantage')</label>
                                            <div class="radio_container">
                                              <div class="row">
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="furnished-arch" value="@lang('lang.furnished')" >
                                                  <label for="furnished-arch">@lang('lang.furnished')</label>
                                                </div>
                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="private_pool-arch" value="@lang('lang.private_pool')">
                                                  <label for="private_pool-arch">@lang('lang.private_pool')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="central_air-conditioning-arch" value="@lang('lang.central_air-conditioning')">
                                                  <label for="central_air-conditioning-arch">@lang('lang.central_air-conditioning')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="luxury_finishing-arch" value="@lang('lang.luxury_finishing')">
                                                  <label for="luxury_finishing-arch">@lang('lang.luxury_finishing')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="close_to_services-arch" value="@lang('lang.close_to_services')">
                                                  <label for="close_to_services-arch">@lang('lang.close_to_services')</label>
    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="garden-arch" value="@lang('lang.garden')">
                                                  <label for="garden-arch">@lang('lang.garden')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="balcony-arch" value="@lang('lang.balcony')">
                                                  <label for="balcony-arch">@lang('lang.balcony')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="elevator-arch" value="@lang('lang.elevator')">
                                                  <label for="elevator-arch">@lang('lang.elevator')</label>
                                                </div>

                                                <div class="col-md-3 mt-3">
 
                                                  <input type="checkbox" name="advantages[]" id="crypt-arch" value="@lang('lang.crypt')">
                                                  <label for="crypt-arch">@lang('lang.crypt')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="head-arch" value="@lang('lang.head')">
                                                  <label for="head-arch">@lang('lang.head')</label>
                                                  
                                                </div>

                                                <div class="col-md-3 mt-3">

                                                  <input type="checkbox" name="advantages[]" id="health_club-arch" value="@lang('lang.health_club')">
                                                  <label for="health_club-arch">@lang('lang.health_club')</label>
                                                  
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="american_cuisine-arch" value="@lang('lang.american_cuisine')">
                                                  <label for="american_cuisine-arch">@lang('lang.american_cuisine')</label>    
                                                </div>

                                                <div class="col-md-3 mt-3">
                                                  <input type="checkbox" name="advantages[]" id="car_parking-arch" value="@lang('lang.car_parking')">
                                                  <label for="car_parking-arch">@lang('lang.car_parking')</label>
                                                
                                                </div>
                                              </div>
                                           
                                              
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.addition_links')</label>
                                            <input type="url" name="links" id="links" class="form-control">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="">@lang('lang.num_ads')</label>
                                            <input type="text" name="number" id="number" class="form-control">
                                          </div>
                                        <div class="col-md-4">
                                          <label for="">@lang('lang.price')</label>
                                          <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                          <label for="">@lang('lang.desc')</label>
                                          <textarea name="description" id="description-arch"  class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        </div>
                                     
                                      </div>
                  `

                  dd.classList.add('d-none')
                }
          $("input[class='touchspin']").TouchSpin();

    }

</script>
@endsection
