<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
        @yield('title')
    </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}} ">
	<link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/cutom.css')}}">

    @yield('css')
</head>
<body>
    @include('layout.nav')
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center js-fullheight"
                        style="background-image: url({{asset('assets/images/background.png')}});">
                        <div class="container-xl">
                            <div class="row justify-content-center">
                                    @yield('slider-content')
                                    {{-- <div id="first-content" class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="content">
                                                <img src="{{asset('assets/images/ads1.png')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="content">
                                                <img src="{{asset('assets/images/ads2.png')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="secound-content" class="row align-items-center justify-content-center">
                                        <div class="col-sm-4 col-md-4 ">
                                            <div class="content">
                                                <img src="{{asset('assets/images/About.png')}}" alt="">
                                                <div class="title">نصائح عقارية</div>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-4 col-md-4">
                                            <div class="content">
                                                <img src="{{asset('assets/images/Agreement.png')}}" alt="">
                                                <div class="title ">نموذج عقد ايجار استثماري </div>
                                            </div>
                                        </div>
    
    
                                        <div class="col-sm-4 col-md-4">
                                            <div class="content">
                                                <img src="{{asset('assets/images/PriceTagUSD.png')}}" alt="">
                                                <div class="title">التقييم العقاري للسكن الخاص</div>
    
                                            </div>
                                        </div>
    
                                    </div> --}}
                                    <!-- <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <h2>Your Property Is Our Priority</h2>
                                        <p class="mb-5">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
                                        <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span
                                                    class="ion ion-ios-arrow-round-forward"></span></a></p>
                                    </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    @include('layout.footer')
    @yield('script')

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
	<script src="{{asset('assets/js/glightbox.min.js')}}"></script>
	<script src="{{asset('assets/js/aos.js')}}"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
	<script src="{{asset('assets/js/google-map.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
		integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
		data-cf-beacon='{"rayId":"808c98a28dad11b6","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>
</body>
</html>