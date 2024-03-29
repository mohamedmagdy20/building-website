@extends('layout.app')
@section('body_class','home page-template page-template-templates page-template-blank page-template-templatesblank-php page page-id-1897 wp-custom-logo rtcl-no-js ehf-header ehf-footer ehf-template-classima ehf-stylesheet-classima header-style-2 footer-style-1 no-sidebar elementor-default elementor-kit-2161 elementor-page elementor-page-1897')
@section('content')
<div id="primary" class="content-area">
    <div data-elementor-type="wp-page" data-elementor-id="1897" class="elementor elementor-1897" data-elementor-post-type="page">
       {{-- Banner  --}}
        <section class="elementor-section elementor-top-section elementor-element elementor-element-5e783be elementor-section-full_width elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" dir="{{app()->getLocale() === 'ar' ? 'rtl' : 'ltr'}}" data-id="5e783be" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf5924a"
							data-id="bf5924a" data-element_type="column"
							data-settings="{&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-e4c2af7 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
									data-id="e4c2af7" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">

                                        {{-- Ads Here --}}
                                        @foreach ($advertises as $item )

										    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-83f172a"
                                                data-id="83f172a" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ecb95b1 elementor-widget elementor-widget-image"
                                                        data-id="ecb95b1" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="1024" height="289"
                                                                src="{{$item->image}}"
                                                                class="attachment-large size-large wp-image-2835" alt=""
                                                                srcset="{{$item->image}} 1024w, {{$item->image}} 300w, {{$item->image}} 768w, {{$item->image}} 180w, {{$item->image}} 870w, {{$item->image}} 1467w"
                                                                sizes="(max-width: 1024px) 100vw, 1024px" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

									</div>
								</section>
								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-fccd89b elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
									data-id="fccd89b" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7da9b07"
											data-id="7da9b07" data-element_type="column"
											data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-bc492c7 elementor-view-default elementor-widget elementor-widget-icon"
													data-id="bc492c7" data-element_type="widget"
													data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<a class="elementor-icon" href="{{route('evaluation')}}">
																<i aria-hidden="true" class="fas fa-calculator"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-fff4ee7 elementor-widget elementor-widget-heading"
													data-id="fff4ee7" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('evaluation')}}">Instant</a></h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-6690004 elementor-widget elementor-widget-heading"
													data-id="6690004" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('evaluation')}}">Valuation</a></h2>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e31374f"
											data-id="e31374f" data-element_type="column"
											data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-f66cfce elementor-view-default elementor-widget elementor-widget-icon"
													data-id="f66cfce" data-element_type="widget"
													data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<a class="elementor-icon" href="{{route('ai')}}">
																<i aria-hidden="true" class="far fa-comments"></i> </a>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-da50259 elementor-widget elementor-widget-heading"
													data-id="da50259" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('ai')}}">Real Estate</a></h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-248f721 elementor-widget elementor-widget-heading"
													data-id="248f721" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('ai')}}">Ai</a></h2>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bd6da68"
											data-id="bd6da68" data-element_type="column"
											data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-40444db elementor-view-default elementor-widget elementor-widget-icon"
													data-id="40444db" data-element_type="widget"
													data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<a class="elementor-icon" href="{{route('tips')}}">
																<i aria-hidden="true" class="fas fa-info"></i> </a>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-2ad26ba elementor-widget elementor-widget-heading"
													data-id="2ad26ba" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('tips')}}">Real Estate</a></h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-2c28a28 elementor-widget elementor-widget-heading"
													data-id="2c28a28" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default"><a
																href="{{route('tips')}}">Tips</a></h2>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7f5304f"
											data-id="7f5304f" data-element_type="column"
											data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-ce0c673 elementor-view-default elementor-widget elementor-widget-icon"
													data-id="ce0c673" data-element_type="widget"
													data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="far fa-file"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-fccd449 elementor-widget elementor-widget-heading"
													data-id="fccd449" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">
															Rental</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-5ccbfad elementor-widget elementor-widget-heading"
													data-id="5ccbfad" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">
															Contract</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section
									class="elementor-section elementor-inner-section elementor-element elementor-element-7f4485c elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
									data-id="7f4485c" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f7d7fb9"
											data-id="f7d7fb9" data-element_type="column"
											data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-608366e elementor-widget elementor-widget-rtcl-listing-search-sortable-form"
													data-id="608366e" data-element_type="widget"
													data-widget_type="rtcl-listing-search-sortable-form.default">
													<div class="elementor-widget-container">

														<div
															class="rtcl-widget-search-sortable rtcl-widget-search-sortable-inline rtcl-widget-search-sortable-style-dependency rtcl-elementor-widget-search-sortable">
															<form action="{{route('home.main')}}"
															method="GET"
																class=" ">
																<div
																	class="rtcl-widget-search-sortable-wrapper rtcl-flex ">
																	<div
																		class="form-group ws-item ws-type rtcl-flex rtcl-flex-column elementor-repeater-item-ef5ab84">

																		<div class="rtcl-search-type">
																			<select class="form-control"
																				id="rtcl-search-type-3054447082"
																				name="type">
																				<option value="">@lang('lang.choose_type')</option>
																				<option value="sale">@lang('lang.sale')
																				</option>
																				<option value="rent">@lang('lang.rent')
																				</option>
																				<option value="instead">@lang('lang.instead')</option>
																			</select>
																		</div>
																	</div>
																	<div
																		class="form-group ws-item ws-location rtcl-flex rtcl-flex-column elementor-repeater-item-58b3d81">
																		<div class="rtcl-search-area">
																			<select class="form-control"
																				id="area"
																				name="area_id">
																				<option value="">@lang('lang.choose_area')</option>
																				@foreach ($areas as $area )

																			    <option data-slug="{{$area->name_en}}" value="{{$area->id}}">{{ app()->getLocale() === 'en' ? $area->name_en : $area->name_ar}}</option>
                                                                                @endforeach
																			</select>
																		</div>

																	</div>
																	<div
																		class="form-group rtcl-flex rtcl-flex-column ws-item ws-category ws-category-dependency elementor-repeater-item-9775b9f">
																		<div class="rtcl-search-category">
																			<select
																				class="form-control"
																				id="category"
																				name="category"
																				onchange="getCategory()"
																				>
																				<option value="-1">@lang('lang.choose_category')
																				</option>
																				<option value="residential">@lang('lang.residential')</option>
																				<option value="commercial_units">@lang('lang.commercial_units')</option>
																				<option value="commercial">@lang('lang.commercial')</option>
																				<option value="investment">@lang('lang.investment')</option>
																				<option value="industrial">@lang('lang.industrial')</option>
																				<option value="chalet">@lang('lang.chalet')</option>
																				<option value="farm">@lang('lang.farm')</option>
																				<option value="break">@lang('lang.break')</option>
																				<option value="lands">@lang('lang.lands')</option>

																			</select>

																			<div class="rtcl-child-terms rtcl-child-terms-248">
																				<select class="form-control rtcl-category-search d-none" id="category_id" name="category_id" >

																				</select>
																			</div>

																		</div>
																	</div>
																	<div
																		class="form-group rt-autocomplete-wrapper rtcl-flex rtcl-flex-column elementor-repeater-item-34fec92">
																		<div class="keywords-field-wrapper">
																			<input type="text" name="q"
																				data-type="listing"
																				class="rtcl-autocomplete form-control"
																				placeholder="@lang('lang.key_word')" value="">
																		</div>
																	</div>
																	<div
																		class="form-group ws-item ws-button rtcl-action-buttons rtcl-flex rtcl-flex-column">
																		<button type="submit" class="btn btn-primary">
																			<span class="icon-wrapper"><i
																					aria-hidden="true"
																					class="fas fa-search-location"></i></span>
																			@lang('lang.search') </button>
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
							</div>
						</div>
					</div>
		</section>
        {{-- Section 1 --}}
        <section class="elementor-section elementor-top-section elementor-element elementor-element-7081049 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="7081049" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aea45cb"
							data-id="aea45cb" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-bed13ef elementor-widget elementor-widget-image"
									data-id="bed13ef" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img loading="lazy" decoding="async" width="1024" height="344"
											src="{{asset('assets/uploads/images/introduction-1-1024x344.png')}}"
											class="attachment-large size-large wp-image-2856" alt=""
											srcset="{{asset('assets/uploads/images/introduction-1-1024x344.png')}} 1024w, {{asset('assets/uploads/images/introduction-1-300x101.png')}} 300w, {{asset('assets/uploads/images/introduction-1-768x258.png')}} 768w, {{asset('assets/uploads/images/introduction-1-180x60.png')}} 180w, ./wp-content/uploads/2023/12/introduction-1-870x292.png 870w, {{asset('assets/uploads/images/introduction-1-1024x344.png')}} 1265w"
											sizes="(max-width: 1024px) 100vw, 1024px" title="">
									</div>
								</div>


								<div class="elementor-element elementor-element-398b90d elementor-widget elementor-widget-heading"
									data-id="398b90d" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container" >
										<h2 class="elementor-heading-title elementor-size-default">@lang('lang.special_ads')</h2>
									</div>
								</div>


								<div class="elementor-element elementor-element-eeadcca elementor-widget elementor-widget-rtcl-listing-slider"
									data-id="eeadcca" data-element_type="widget"
									data-widget_type="rtcl-listing-slider.default">
									<div class="elementor-widget-container">

										<div class="rtcl rtcl-listings-sc-wrapper rtcl-elementor-widget rtcl-el-slider-wrapper rtcl-listings-slider  rtin-unique-class-275220361  rtcl-slider-pagination-style-2 rtcl-slider-btn-style-1"
											style="--xl-width: calc( 25% - 20px );--lg-width:calc( 25% - 20px );--md-width:calc( 33.333333333333% - 20px );--sm-width:calc( 50% - 20px );--mb-width:calc( 100% - 20px );--margin-right: 20px;--nagative-margin-right: -20px;">
											<div class="rtcl-listings-wrapper">

												<div class="rtcl-listings rtcl-listings-slider-container swiper rtcl-grid-view rtcl-style-4-view  rtcl-carousel-slider "
													data-options="{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;slideClass&quot;:&quot;swiper-slide-customize&quot;,&quot;autoplay&quot;:{&quot;delay&quot;:7000,&quot;pauseOnMouseEnter&quot;:true,&quot;disableOnInteraction&quot;:false},&quot;pagination&quot;:{&quot;el&quot;:&quot;.rtin-unique-class-275220361 .rtcl-slider-pagination&quot;,&quot;clickable&quot;:true,&quot;type&quot;:&quot;bullets&quot;},&quot;speed&quot;:2000,&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.rtin-unique-class-275220361 .button-right&quot;,&quot;prevEl&quot;:&quot;.rtin-unique-class-275220361 .button-left&quot;},&quot;autoHeight&quot;:false,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;575&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:2},&quot;767&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4},&quot;1199&quot;:{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4}}}">
													<div class="rtcl-swiper-lazy-preloader">
														<svg class="spinner" viewbox="0 0 50 50">
															<circle class="path" cx="25" cy="25" r="20" fill="none"
																stroke-width="5"></circle>
														</svg>
													</div>
													<div class="swiper-wrapper">

                                                        @foreach ($data as $item )

                                                        <div
															class="rtcl-widget-listing-item listing-item swiper-slide-customize listing-item rtcl-listing-item post-3064 status-publish is-for_sale rtcl_category-residential-lands rtcl_location-hawally rtcl_location-al-salam">

															@if ($item->is_sold == true)
																				  <div class="listing-thumb">
																					<span class="rtcl-sold-out">Sold Out</span>
																					<a href="{{route('advertisment.show',$item->id)}}"
																						title="{{$item->title}}"><img loading="lazy"
																							decoding="async"
																							src="
																							@if(count($item->adsImage) == 0)
																								https://admin.alfuraij.com/assets/images/default.jpg
																							@else
																								https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
																							@endif
																							"
																							class="rtcl-thumbnail" alt="{{$item->title}}"
																							title=""></a>

																							@auth
																							@if (! $item->isFavoriteByUser($item->id))
																							<div class="rtcl-meta-buttons-wrap horizontal-layout meta-button-count-1">
																								<div class="rtcl-fav rtcl-el-button">
																									<a onclick="addFavourite({{$item->id}})"
																										class="rtcl-require-login "><span
																											class="rtcl-icon rtcl-icon-heart-empty"></span><span
																											class="favourite-label">Add to
																											Favourites</span></a>
																								</div>
																							</div>
																							@endif


																							@endauth

																				</div>
															@else
															<div class="listing-thumb">
																<a href="{{route('advertisment.show',$item->id)}}"
																	title="{{$item->title}}"><img loading="lazy"
																		decoding="async"
																		src="
																		@if(count($item->adsImage) == 0)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										@else
                                										    https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
                                										@endif
																		"
																		class="rtcl-thumbnail" alt="{{$item->title}}"
																		title=""></a>

																		@auth
																		@if (! $item->isFavoriteByUser($item->id))
																		<div class="rtcl-meta-buttons-wrap horizontal-layout meta-button-count-1">
																			<div class="rtcl-fav rtcl-el-button">
																				<a onclick="addFavourite({{$item->id}})"
																					class="rtcl-require-login "><span
																						class="rtcl-icon rtcl-icon-heart-empty"></span><span
																						class="favourite-label">Add to
																						Favourites</span></a>
																			</div>
																		</div>
																		@endif


																		@endauth

															</div>
															@endif

															<div class="item-content">
																<div class="category"><a
																		href="{{route('home.main')}}?category_id={{$item->category_id}}">{{app()->getLocale() === 'en' ? $item->category->name_en : $item->category->name_ar}}</a></div>
																<h3 class="listing-title rtcl-listing-title">
																	<a href="{{route('advertisment.show',$item->id)}}"
																		title="{{$item->title}}">{{$item->title}}</a>
																</h3>
																<div class="rtcl-listable">
																	{{-- <div class="rtcl-listable-item">
																		@if($item->space != null)
																		<span class="listable-label">@lang('lang.space')</span>
																		<span class="listable-value">{{$item->space}}</span>
																		@endif
																	</div>
																	@if ($item->advantages != null)
																	<br>
																	<div class="rtcl-listable-item">
																		<span class="listable-label">@lang('lang.features')</span>
																		<span class="listable-value">{{$item->advantages}}</span>
																	</div>
																	@endif --}}
																</div>
																@if ($item->price != null)
																<div class="item-price">
																	<div class="rtcl-price price-type-regular"><span
																			class="rtcl-price-amount amount">{{$item->price}}&nbsp;<span
																				class="rtcl-price-currencySymbol">&#x62f;.&#x643;</span></span>
																	</div>
																</div>
																@endif
																<ul class="rtcl-listing-meta-data">
																	<li class="rtin-type">
																		<i class="rtcl-icon-tags"
																			aria-hidden="true"></i>@if ($item->type == 'sale')
																			@lang('lang.sale')
																		@elseif ($item->type == 'rent')
																		@lang('lang.rent')
																		@else
																			@lang('lang.instead')
																		@endif
																	</li>
																	<li class="date">
																		<i class="rtcl-icon rtcl-icon-clock"
																			aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->updated_at)->diffForHumans()}}
																	</li>
																	<li class="location">
																		<i class="rtcl-icon rtcl-icon-location"
																			aria-hidden="true"></i><a
																			href="{{route('home.main')}}?area_id={{$item->area_id}}">{{app()->getLocale() === 'en' ? $item->area->name_en : $item->area->name_ar }}</a><span
																			class="rtcl-delimiter">,</span>
																	</li>
																	<li class="view">
																		<i class="rtcl-icon rtcl-icon-eye"
																			aria-hidden="true"></i>{{$item->getViews()}} @lang('lang.views')
																	</li>
																</ul>
															</div>
														</div>
                                                        @endforeach


													</div>
												</div> <!-- End wiper-wrapper -->
												<!-- If we need navigation buttons -->
												<span class="rtcl-slider-btn button-left rtcl-icon-angle-left"></span>
												<span class="rtcl-slider-btn button-right rtcl-icon-angle-right"></span>

												<!-- If we need pagination -->
												<div class="rtcl-slider-pagination"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-a30ddfe elementor-widget elementor-widget-rtcl-listing-slider"
									data-id="a30ddfe" data-element_type="widget"
									data-widget_type="rtcl-listing-slider.default">
									<div class="elementor-widget-container">

										<div class="rtcl rtcl-listings-sc-wrapper rtcl-elementor-widget rtcl-el-slider-wrapper rtcl-listings-slider  rtin-unique-class-1526770803  rtcl-slider-pagination-style-2 rtcl-slider-btn-style-1"
											style="--xl-width: calc( 25% - 20px );--lg-width:calc( 25% - 20px );--md-width:calc( 33.333333333333% - 20px );--sm-width:calc( 50% - 20px );--mb-width:calc( 100% - 20px );--margin-right: 20px;--nagative-margin-right: -20px;">
											<div class="rtcl-listings-wrapper">

												<div class="rtcl-listings rtcl-listings-slider-container swiper rtcl-grid-view rtcl-style-4-view  rtcl-carousel-slider "
													data-options="{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;slideClass&quot;:&quot;swiper-slide-customize&quot;,&quot;autoplay&quot;:{&quot;delay&quot;:7000,&quot;pauseOnMouseEnter&quot;:true,&quot;disableOnInteraction&quot;:false},&quot;pagination&quot;:{&quot;el&quot;:&quot;.rtin-unique-class-1526770803 .rtcl-slider-pagination&quot;,&quot;clickable&quot;:true,&quot;type&quot;:&quot;bullets&quot;},&quot;speed&quot;:2000,&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.rtin-unique-class-1526770803 .button-right&quot;,&quot;prevEl&quot;:&quot;.rtin-unique-class-1526770803 .button-left&quot;},&quot;autoHeight&quot;:false,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;575&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:2},&quot;767&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4},&quot;1199&quot;:{&quot;slidesPerView&quot;:4,&quot;slidesPerGroup&quot;:4}}}">
													<div class="rtcl-swiper-lazy-preloader">
														<svg class="spinner" viewbox="0 0 50 50">
															<circle class="path" cx="25" cy="25" r="20" fill="none"
																stroke-width="5"></circle>
														</svg>
													</div>
													<div class="swiper-wrapper">


                                                        @foreach ($dataOld as $item )

                                                        <div
															class="rtcl-widget-listing-item listing-item swiper-slide-customize listing-item rtcl-listing-item post-3064 status-publish is-for_sale rtcl_category-residential-lands rtcl_location-hawally rtcl_location-al-salam">


															{{-- <div class="listing-thumb">
																<a href="{{route('advertisment.show',$item->id)}}"
																	title="{{$item->title}}"><img loading="lazy"
																		decoding="async"
																		src="
																		@if(count($item->adsImage) == 0)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										@else
                                										    https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
                                										@endif
																		"
																		class="rtcl-thumbnail" alt="{{$item->title}}"
																		title=""></a>

																		@auth
																			@if (! $item->isFavoriteByUser($item->id))
																			<div class="rtcl-meta-buttons-wrap horizontal-layout meta-button-count-1">
																				<div class="rtcl-fav rtcl-el-button">
																					<a onclick="addFavourite({{$item->id}})"
																						class="rtcl-require-login"><span
																							class="rtcl-icon rtcl-icon-heart-empty"></span><span
																							class="favourite-label">Add to
																							Favourites</span></a>
																				</div>
																			</div>
																			@endif

																		@endauth

															</div> --}}
															@if ($item->is_sold == true)
															<div class="listing-thumb">
															  <span class="rtcl-sold-out">Sold Out</span>
															  <a href="{{route('advertisment.show',$item->id)}}"
																  title="{{$item->title}}"><img loading="lazy"
																	  decoding="async"
																	  src="
																	  @if(count($item->adsImage) == 0)
																		  https://admin.alfuraij.com/assets/images/default.jpg
																	  @else
																		  https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
																	  @endif
																	  "
																	  class="rtcl-thumbnail" alt="{{$item->title}}"
																	  title=""></a>

																	  @auth
																	  @if (! $item->isFavoriteByUser($item->id))
																	  <div class="rtcl-meta-buttons-wrap horizontal-layout meta-button-count-1">
																		  <div class="rtcl-fav rtcl-el-button">
																			  <a onclick="addFavourite({{$item->id}})"
																				  class="rtcl-require-login "><span
																					  class="rtcl-icon rtcl-icon-heart-empty"></span><span
																					  class="favourite-label">Add to
																					  Favourites</span></a>
																		  </div>
																	  </div>
																	  @endif


																	  @endauth

														  </div>
									  @else
									  <div class="listing-thumb">
										  <a href="{{route('advertisment.show',$item->id)}}"
											  title="{{$item->title}}"><img loading="lazy"
												  decoding="async"
												  src="
												  @if(count($item->adsImage) == 0)
													  https://admin.alfuraij.com/assets/images/default.jpg
												  @else
													  https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
												  @endif
												  "
												  class="rtcl-thumbnail" alt="{{$item->title}}"
												  title=""></a>

												  @auth
												  @if (! $item->isFavoriteByUser($item->id))
												  <div class="rtcl-meta-buttons-wrap horizontal-layout meta-button-count-1">
													  <div class="rtcl-fav rtcl-el-button">
														  <a onclick="addFavourite({{$item->id}})"
															  class="rtcl-require-login "><span
																  class="rtcl-icon rtcl-icon-heart-empty"></span><span
																  class="favourite-label">Add to
																  Favourites</span></a>
													  </div>
												  </div>
												  @endif


												  @endauth

									  </div>
									  @endif

															<div class="item-content">
																<div class="category"><a
																		href="{{route('home.main')}}?category_id={{$item->category_id}}">{{app()->getLocale() === 'en' ? $item->category->name_en : $item->category->name_ar}}</a></div>
																<h3 class="listing-title rtcl-listing-title">
																	<a href="{{route('advertisment.show',$item->id)}}"
																		title="{{$item->title}}">{{$item->title}}</a>
																</h3>
																<div class="rtcl-listable">
																	{{-- <div class="rtcl-listable-item">
																		@if($item->space != null)
																		<span class="listable-label">@lang('lang.space')</span>
																		<span class="listable-value">{{$item->space}}</span>
																		@endif
																	</div>
																	@if ($item->advantages != null)
																	<br>
																	<div class="rtcl-listable-item">
																		<span class="listable-label">@lang('lang.features')</span>
																		<span class="listable-value">{{$item->advantages}}</span>
																	</div>
																	@endif --}}

																</div>
																@if ($item->price != null)
																<div class="item-price">
																	<div class="rtcl-price price-type-regular"><span
																			class="rtcl-price-amount amount">{{$item->price}}&nbsp;<span
																				class="rtcl-price-currencySymbol">&#x62f;.&#x643;</span></span>
																	</div>
																</div>
																@endif
																<ul class="rtcl-listing-meta-data">
																	<li class="rtin-type">
																		<i class="rtcl-icon-tags"
																			aria-hidden="true"></i>@if ($item->type == 'sale')
																			@lang('lang.sale')
																		@elseif ($item->type == 'rent')
																		@lang('lang.rent')
																		@else
																			@lang('lang.instead')
																		@endif
																	</li>
																	<li class="date">
																		<i class="rtcl-icon rtcl-icon-clock"
																			aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->updated_at)->diffForHumans()}}
																	</li>
																	<li class="location">
																		<i class="rtcl-icon rtcl-icon-location"
																			aria-hidden="true"></i><a
																			href="{{route('home.main')}}?area_id={{$item->area_id}}">{{$item->area->name_en}}</a><span
																			class="rtcl-delimiter">,</span>
																	</li>
																	<li class="view">
																		<i class="rtcl-icon rtcl-icon-eye"
																			aria-hidden="true"></i>{{$item->getViews()}} @lang('lang.views')
																	</li>
																</ul>
															</div>
														</div>
                                                        @endforeach



													</div>
												</div> <!-- End wiper-wrapper -->
												<!-- If we need navigation buttons -->
												<span class="rtcl-slider-btn button-left rtcl-icon-angle-left"></span>
												<span class="rtcl-slider-btn button-right rtcl-icon-angle-right"></span>

												<!-- If we need pagination -->
												<div class="rtcl-slider-pagination"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		{{--  Our Availiable App  --}}
		<section class="elementor-section elementor-top-section elementor-element elementor-element-cb60108 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
			data-id="cb60108" data-element_type="section"
			data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;background_motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4.3,&quot;sizes&quot;:[]},&quot;shape_divider_bottom&quot;:&quot;waves&quot;}">
				<div class="elementor-shape elementor-shape-bottom" data-negative="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
						<path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
							c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
							c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
					</svg>
				</div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b65add"
						data-id="6b65add" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-200d010 elementor-widget elementor-widget-rt-app-banner"
								data-id="200d010" data-element_type="widget"
								data-widget_type="rt-app-banner.default">
								<div class="elementor-widget-container">
									<div class="app-banner">
										<div class="row">
											<div class="col-lg-6 col-sm-12 col-12">
												<div class="banner-content">
													<h2 class="item-title">@lang('lang.our_app_ava')</h2>
													<p>@lang('lang.our_app_ava_text')</p>
													<div class="download-btn">
														<a href="https://play.google.com/store/apps/details?id=com.classima.radiustheme"
															target="_blank" rel="nofollow">
															<div class="item-text">Get it on<span>Google Play
																	Store</span>
															</div>
															<div class="item-icon"><i class="fab fa-android"></i>
															</div>
														</a> <a
															href="https://apps.apple.com/app/classima-classified-ads/id1609365955"
															target="_blank" rel="nofollow">
															<div class="item-text">Get it on<span>Apple Apps
																	Store</span>
															</div>
															<div class="item-icon"><i class="fab fa-apple"></i>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6 d-none d-sm-block">
												<div class="banner-img">
													<div class="item-img">
														<img loading="lazy" decoding="async" width="300"
															height="586"
															src="{{asset('assets/uploads/images/iphone-15-mockup-front-view-isolated-illustration-on-transparent-background-smartphone-or-mobile-phone-or-cellphone-cut-out-template-png1221-252x493.png')}}"
															class="attachment-full size-full" alt=""
															srcset="{{asset('assets/uploads/images/iphone-15-mockup-front-view-isolated-illustration-on-transparent-background-smartphone-or-mobile-phone-or-cellphone-cut-out-template-png1221-252x493.png')}}"
															sizes="(max-width: 300px) 100vw, 300px" title="">
													</div>
													<div class="bg-shape">
														<img loading="lazy" decoding="async" width="67" height="67"
															src="{{asset('assets/uploads/images/shape1.png')}}"
															class="shape1" alt="" title=""><img loading="lazy"
															decoding="async" width="61" height="61"
															src="{{asset('assets/uploads/images/shape2.png')}}"
															class="shape2" alt="" title=""><img loading="lazy"
															decoding="async" width="521" height="232"
															src="{{asset('assets/uploads/images/shape3.png')}}"
															class="shape3" alt=""
															srcset="{{asset('assets/uploads/images/shape3.png')}} 521w, {{asset('assets/uploads/images/shape3-300x134.png')}}  300w, {{asset('assets/uploads/images/shape3-180x80.png')}}  180w"
															sizes="(max-width: 521px) 100vw, 521px" title=""><img
															loading="lazy" decoding="async" width="60" height="11"
															src="{{asset('assets/uploads/images/shape4.png')}}"
															class="shape4" alt="" title="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		{{-- Five Advertisments --}}
		<section class="elementor-section elementor-top-section elementor-element elementor-element-8392899 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
				data-id="8392899" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3d8a73"
							data-id="d3d8a73" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a4af9be elementor-widget elementor-widget-rt-title"
									data-id="a4af9be" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-el-title rtin-style-1">
											<h2 class="rtin-title">@lang('lang.Newest_Sale_Ads')</h2>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-f731e55 elementor-widget elementor-widget-rtcl-listing-items"
									data-id="f731e55" data-element_type="widget"
									data-widget_type="rtcl-listing-items.default">
									<div class="elementor-widget-container">

										<div class="rtcl rtcl-listings-sc-wrapper rtcl-elementor-widget ">
											<div class="rtcl-listings-wrapper">
												<div class="rtcl-listings rtcl-list-view rtcl-style-1-view  ">

													@foreach ($dataSale as $item )
													<div
														class="rtcl-widget-listing-item listing-item rtcl-listing-item post-3064 status-publish is-for_sale rtcl_category-residential-lands rtcl_location-hawally rtcl_location-al-salam">



														<div class="listing-thumb">

															<div class="listing-thumb-inner">
																@if ($item->is_sold == true)
																<span class="rtcl-sold-out">Sold Out</span>
																@endif
																<a href="{{route('advertisment.show',$item->id)}}"
																	title="{{$item->title}}"><img loading="lazy"
																		decoding="async" width="385" height="280"
																		src="
																		@if(count($item->adsImage) == 0)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										@else
                                										    https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
                                										@endif
																		"
																		class="rtcl-thumbnail" alt="{{$item->title}}"
																		title=""></a>
															</div>
															{{-- <div class="listing-thumb-inner"><span class="rtcl-sold-out">Sold Out</span><a href="https://codedhosting.com/alfuraij/listing/apartment-for-buy/" title="للبيع شقة في المهبولة"><img loading="lazy" decoding="async" width="400" height="280" src="https://codedhosting.com/alfuraij/wp-content/uploads/classified-listing/2020/04/product_10-400x280.jpg" class="rtcl-thumbnail" alt="للبيع شقة في المهبولة" title=""></a> </div> --}}
														</div>
														<div class="rtin-content-area">
															<div class="item-content">
																<div class="rtcl-listing-badge-wrap"></div>
																<div class="category"><a
																		href="{{route('home.main')}}?category_id={{$item->category_id}}">{{$item->category->name}}</a></div>
																<h3 class="listing-title rtcl-listing-title">
																	<a href="{{route('advertisment.show',$item->id)}}"
																		title="{{$item->title}}">{{$item->title}}</a>
																</h3>
																<div class="rtcl-listable">
																	{{-- <div class="rtcl-listable-item">
																		@if($item->space != null)
																		<span class="listable-label">@lang('lang.space')</span>
																		<span class="listable-value">{{$item->space}}</span>

																		@endif
																	</div>
																	@if ($item->advantages != null)
																	<br>
																	<div class="rtcl-listable-item">
																		<span class="listable-label">@lang('lang.features')</span>
																		<span class="listable-value">{{$item->advantages}}</span>
																	</div>
																	@endif --}}
																</div>
																<ul class="rtcl-listing-meta-data">
																	<li class="rtin-type">
																		<i class="rtcl-icon-tags"
																			aria-hidden="true"></i>@if ($item->type == 'sale')
																			@lang('lang.sale')
																		@elseif ($item->type == 'rent')
																		@lang('lang.rent')
																		@else
																			@lang('lang.instead')
																		@endif
																	</li>
																	<li class="date">
																		<i class="rtcl-icon rtcl-icon-clock"
																			aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->updated_at)->diffForHumans()}}
																	</li>
																	<li class="location">
																		<i class="rtcl-icon rtcl-icon-location"
																			aria-hidden="true"></i><a
																			href="{{route('home.main')}}?area_id={{$item->area_id}}">{{$item->area->name}}</a><span
																			class="rtcl-delimiter"></span>
																	</li>
																	<li class="view">
																		<i class="rtcl-icon rtcl-icon-eye"
																			aria-hidden="true"></i>{{$item->getViews()}} @lang('lang.views')
																	</li>
																</ul>
																@if ($item->price != null)

																<div class="item-price">
																	<div class="rtcl-price price-type-regular"><span
																			class="rtcl-price-amount amount">{{$item->price}}&nbsp;<span
																				class="rtcl-price-currencySymbol">&#x62f;.&#x643;</span></span>
																	</div>
																</div>
																@endif
															</div>
															<div class="rtin-right ">
																<a class="rtin-details-button"
																	href="{{route('advertisment.show',$item->id)}}">Details</a>

																@auth
																@if (! $item->isFavoriteByUser($item->id))
																<div class="rtcl-meta-buttons-withtext meta-button-count-1">
																	<div class="rtcl-fav rtcl-text-el-button">
																		<a onclick="addFavourite({{$item->id}})"
																			class="rtcl-require-login "><span
																				class="rtcl-icon rtcl-icon-heart-empty"></span><span
																				class="favourite-label">Add to
																				Favourites</span></a>
																	</div>
																</div>
																@endif

																@endauth

															</div>
														</div>
													</div>

													@endforeach

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		{{-- Five Rent Advertisments--}}
		<section class="elementor-section elementor-top-section elementor-element elementor-element-b8d4c7f elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
					data-id="b8d4c7f" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-006f796"
							data-id="006f796" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b098121 elementor-widget elementor-widget-rt-title"
									data-id="b098121" data-element_type="widget" data-widget_type="rt-title.default">
									<div class="elementor-widget-container">
										<div class="rt-el-title rtin-style-1">
											<h2 class="rtin-title">@lang('lang.Newest_Rent_Ads')</h2>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-ae86063 elementor-widget elementor-widget-rtcl-listing-items"
									data-id="ae86063" data-element_type="widget"
									data-widget_type="rtcl-listing-items.default">
									<div class="elementor-widget-container">

										<div class="rtcl rtcl-listings-sc-wrapper rtcl-elementor-widget ">
											<div class="rtcl-listings-wrapper">
												<div class="rtcl-listings rtcl-list-view rtcl-style-1-view  ">

													@foreach ($dataRent as $item )
													<div
														class="rtcl-widget-listing-item listing-item rtcl-listing-item post-3064 status-publish is-for_sale rtcl_category-residential-lands rtcl_location-hawally rtcl_location-al-salam">



														<div class="listing-thumb">
															<div class="listing-thumb-inner">
																@if ($item->is_sold == true)
																<span class="rtcl-sold-out">Sold Out</span>
																@endif
																<a href="{{route('advertisment.show',$item->id)}}"
																	title="{{$item->title}}"><img loading="lazy"
																		decoding="async" width="385" height="280"
																		src="
																		@if(count($item->adsImage) == 0)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										@else
                                										    https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
                                										@endif
																		"
																		class="rtcl-thumbnail" alt="{{$item->title}}"
																		title=""></a>
															</div>
														</div>
														<div class="rtin-content-area">
															<div class="item-content">
																<div class="rtcl-listing-badge-wrap"></div>
																<div class="category"><a
																		href="{{route('home.main')}}?category_id={{$item->category_id}}">{{$item->category->name}}</a></div>
																<h3 class="listing-title rtcl-listing-title">
																	<a href="./listing/%d9%84%d9%84%d8%a8%d9%8a%d8%b9-%d8%a7%d8%b1%d8%b6-%d9%81%d9%8a-%d8%a7%d9%84%d8%b3%d9%84%d8%a7%d9%85/index.html"
																		title="{{$item->title}}">{{$item->title}}</a>
																</h3>
																<div class="rtcl-listable">
																	{{-- <div class="rtcl-listable-item">
																		@if($item->space != null)
																		<span class="listable-label">@lang('lang.space')</span>
																		<span class="listable-value">{{$item->space}}</span>
																		@endif
																	</div>
																	@if ($item->advantages != null)
																	<br>
																	<div class="rtcl-listable-item">
																		<span class="listable-label">@lang('lang.features')</span>
																		<span class="listable-value">{{$item->advantages}}</span>
																	</div>
																	@endif --}}
																</div>
																<ul class="rtcl-listing-meta-data">
																	<li class="rtin-type">
																		<i class="rtcl-icon-tags"
																			aria-hidden="true"></i>@if ($item->type == 'sale')
																			@lang('lang.sale')
																		@elseif ($item->type == 'rent')
																		@lang('lang.rent')
																		@else
																			@lang('lang.instead')
																		@endif
																	</li>
																	<li class="date">
																		<i class="rtcl-icon rtcl-icon-clock"
																			aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->updated_at)->diffForHumans()}}
																	</li>
																	<li class="location">
																		<i class="rtcl-icon rtcl-icon-location"
																			aria-hidden="true"></i><a
																			href="{{route('home.main')}}?area_id={{$item->area_id}}">{{$item->area->name}}</a><span
																			class="rtcl-delimiter"></span>
																	</li>
																	<li class="view">
																		<i class="rtcl-icon rtcl-icon-eye"
																			aria-hidden="true"></i>{{$item->getViews()}} @lang('lang.views')
																	</li>
																</ul>
																@if ($item->price != null)

																<div class="item-price">
																	<div class="rtcl-price price-type-regular"><span
																			class="rtcl-price-amount amount">{{$item->price}}&nbsp;<span
																				class="rtcl-price-currencySymbol">&#x62f;.&#x643;</span></span>
																	</div>
																</div>
																@endif
															</div>
															<div class="rtin-right ">
																<a class="rtin-details-button"
																	href="{{route('advertisment.show',$item->id)}}">Details</a>

																@auth
																@if (! $item->isFavoriteByUser($item->id))
																<div class="rtcl-meta-buttons-withtext meta-button-count-1">
																	<div class="rtcl-fav rtcl-text-el-button">
																		<a onclick="addFavourite({{$item->id}})"
																			class="rtcl-require-login "><span
																				class="rtcl-icon rtcl-icon-heart-empty"></span><span
																				class="favourite-label">Add to
																				Favourites</span></a>
																	</div>
																</div>
																@endif

																@endauth

															</div>
														</div>
													</div>

													@endforeach

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		{{-- Five Instead Advertisments --}}
		<section
            class="elementor-section elementor-top-section elementor-element elementor-element-f2db415 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
            data-id="f2db415" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9511627"
                    data-id="9511627" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8960e3d elementor-widget elementor-widget-rt-title"
                            data-id="8960e3d" data-element_type="widget" data-widget_type="rt-title.default">
                            <div class="elementor-widget-container">
                                <div class="rt-el-title rtin-style-1">
                                    <h2 class="rtin-title">@lang('lang.Newest_Exchange_Ads')</h2>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4d2f2ea elementor-widget elementor-widget-rtcl-listing-items"
                            data-id="4d2f2ea" data-element_type="widget"
                            data-widget_type="rtcl-listing-items.default">
                            <div class="elementor-widget-container">

                                <div class="rtcl rtcl-listings-sc-wrapper rtcl-elementor-widget ">
                                    <div class="rtcl-listings-wrapper">
                                        <div class="rtcl-listings rtcl-list-view rtcl-style-1-view  ">
                                            @foreach ($dataInstead as $item )
                                            <div
                                                class="rtcl-widget-listing-item listing-item rtcl-listing-item post-3064 status-publish is-for_sale rtcl_category-residential-lands rtcl_location-hawally rtcl_location-al-salam">



                                                <div class="listing-thumb">
                                                    <div class="listing-thumb-inner">
                                                        @if ($item->is_sold == true)
                                                                    <span class="rtcl-sold-out">Sold Out</span>
                                                        @endif
                                                        <a href="{{route('advertisment.show',$item->id)}}"
                                                            title="{{$item->title}}"><img loading="lazy"
                                                                decoding="async" width="385" height="280"
                                                                src="
                                                                @if(count($item->adsImage) == 0)
                                                                    https://admin.alfuraij.com/assets/images/default.jpg
                                                                @else
                                                                    https://admin.alfuraij.com/uploads/ads/{{$item->adsImage[0]->image}}
                                                                @endif
                                                                "
                                                                class="rtcl-thumbnail" alt="{{$item->title}}"
                                                                title=""></a>
                                                    </div>
                                                </div>
                                                <div class="rtin-content-area">
                                                    <div class="item-content">
                                                        <div class="rtcl-listing-badge-wrap"></div>
                                                        <div class="category"><a
                                                                href="{{route('home.main')}}?category_id={{$item->category_id}}">{{$item->category->name}}</a></div>
                                                        <h3 class="listing-title rtcl-listing-title">
                                                            <a href="{{route('advertisment.show',$item->id)}}"
                                                                title="{{$item->title}}">{{$item->title}}</a>
                                                        </h3>
                                                        <div class="rtcl-listable">
                                                            {{-- <div class="rtcl-listable-item">
                                                                @if($item->space != null)
                                                                <span class="listable-label">@lang('lang.space')</span>
                                                                <span class="listable-value">{{$item->space}}</span>
                                                                @endif
                                                            </div>
                                                            @if ($item->advantages != null)
                                                                <br>
                                                                <div class="rtcl-listable-item">
                                                                    <span class="listable-label">@lang('lang.features')</span>
                                                                    <span class="listable-value">{{$item->advantages}}</span>
                                                                </div>
                                                            @endif --}}
                                                        </div>
                                                        <ul class="rtcl-listing-meta-data">
                                                            <li class="rtin-type">
                                                                <i class="rtcl-icon-tags"
                                                                    aria-hidden="true"></i>@if ($item->type == 'sale')
                                                                        @lang('lang.sale')
                                                                    @elseif ($item->type == 'rent')
                                                                    @lang('lang.rent')
                                                                    @else
                                                                        @lang('lang.instead')
                                                                    @endif
                                                            </li>
                                                            <li class="date">
                                                                <i class="rtcl-icon rtcl-icon-clock"
                                                                    aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->updated_at)->diffForHumans()}}
                                                            </li>
                                                            <li class="location">
                                                                <i class="rtcl-icon rtcl-icon-location"
                                                                    aria-hidden="true"></i><a
                                                                    href="{{route('home.main')}}?area_id={{$item->area_id}}">{{$item->area->name}}</a><span
                                                                    class="rtcl-delimiter"></span>
                                                            </li>
                                                            <li class="view">
                                                                <i class="rtcl-icon rtcl-icon-eye"
                                                                    aria-hidden="true"></i>{{$item->getViews()}} @lang('lang.views')
                                                            </li>
                                                        </ul>
                                                        @if ($item->price != null)
                                                            <div class="item-price">
                                                                <div class="rtcl-price price-type-regular"><span
                                                                        class="rtcl-price-amount amount">{{$item->price}}&nbsp;<span
                                                                            class="rtcl-price-currencySymbol">&#x62f;.&#x643;</span></span>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                    <div class="rtin-right ">
                                                        <a class="rtin-details-button"
                                                            href="{{route('advertisment.show',$item->id)}}">Details</a>

                                                        @auth
                                                        @if (! $item->isFavoriteByUser($item->id))
                                                        <div class="rtcl-meta-buttons-withtext meta-button-count-1">
                                                            <div class="rtcl-fav rtcl-text-el-button">
                                                                <a onclick="addFavourite({{$item->id}})"
                                                                    class="rtcl-require-login "><span
                                                                        class="rtcl-icon rtcl-icon-heart-empty"></span><span
                                                                        class="favourite-label">Add to
                                                                        Favourites</span></a>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @endauth

                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e05cf07 elementor-widget elementor-widget-rt-listing-cat-slider"
                            data-id="e05cf07" data-element_type="widget"
                            data-widget_type="rt-listing-cat-slider.default">
                            <div class="elementor-widget-container">
                                <div class="rt-el-listing-cat-slider slider-nav-enabled rtin-dark">
                                    <div class="rtcl-carousel-slider"
                                        data-options="{&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.rt-el-listing-cat-slider .swiper-button-next&quot;,&quot;prevEl&quot;:&quot;.rt-el-listing-cat-slider .swiper-button-prev&quot;},&quot;loop&quot;:true,&quot;speed&quot;:200,&quot;spaceBetween&quot;:10,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;480&quot;:{&quot;slidesPerView&quot;:2},&quot;600&quot;:{&quot;slidesPerView&quot;:3},&quot;800&quot;:{&quot;slidesPerView&quot;:4},&quot;992&quot;:{&quot;slidesPerView&quot;:5},&quot;1200&quot;:{&quot;slidesPerView&quot;:6}},&quot;autoplay&quot;:{&quot;delay&quot;:&quot;5000&quot;,&quot;disableOnInteraction&quot;:false,&quot;pauseOnMouseEnter&quot;:&quot;yes&quot;}}">
                                        <div class="swiper-wrapper">
                                        @foreach ($categories as $item )
                                        <div class="swiper-slide">
                                            <a class="rtin-item"
                                                href="{{route('home.main')}}?category_id={{$item->id}}">
                                                <div class="rtin-title">{{app()->getLocale() === 'en' ? $item->name_en : $item->name_ar}}</div>
                                                <div class="rtin-count">({{$item->advertisment->count()}})</div>
                                            </a>
                                        </div>
                                        @endforeach

                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </section>
			</div>
</div>
@endsection

@section('script')
<script>
    // Function to check if the user is on a mobile device
    function isMobileDevice() {
        return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
    }

    // Redirect based on device type
    var currentLocation = window.location.href;
    var mobileRedirect = 'https://play.google.com/';
    var desktopRedirect = '/'; // Change this to the desired desktop redirect URL

    var redirectKey = isMobileDevice() ? 'mobileRedirected' : 'desktopRedirected';
    var redirected = sessionStorage.getItem(redirectKey);

    if (!redirected && ((isMobileDevice() && currentLocation !== mobileRedirect) || (!isMobileDevice() && currentLocation !== desktopRedirect))) {
        // Redirect only if not already redirected and not on the correct page
        sessionStorage.setItem(redirectKey, 'true');
        window.location.href = isMobileDevice() ? mobileRedirect : desktopRedirect;
    }
</script>


<script>
	function addFavourite(id)
	{
	    $.ajax({
	        type: 'GET',
	        url: "{{route('ads.fav.create')}}",
	        data: {id:id},
	        dataType: 'JSON',
	        success: function (results) {
	            toastr.success('Advertisment Added To Favourite', 'success');
				location.reload();
	        },
	        error:function(result){
	            console.log(result);
	            toastr.error('Error Accure', 'Error');

	        }
	    });
	}

	function getCategory() {
        let category = $("#category").find(":selected").val();
		console.log(category);
        $.ajax({
            type: 'GET',
            url: `{{route('get.category.type')}}?category=${category}`,
            success: function(data) {
                $("#category_id").removeClass('d-none');
                $("#category_id").html(data);
            },
            error: function(error) {
                console.log('error');
            }
        });
    }
</script>
@endsection
