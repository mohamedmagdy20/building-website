<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="./xmlrpc.php">
	<title>Al Furaij Real Estate &#8211; الفريج العقارية</title>
	<meta name="robots" content="max-image-preview:large">
	<noscript>
		<style>
			#preloader {
				display: none;
			}
		</style>
	</noscript>
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    @include('layout.head')
 
    @yield('css')
</head>
<body class="home page-template page-template-templates page-template-blank page-template-templatesblank-php page page-id-1897 wp-custom-logo rtcl-no-js ehf-header ehf-footer ehf-template-classima ehf-stylesheet-classima header-style-2 footer-style-1 no-sidebar elementor-default elementor-kit-2161 elementor-page elementor-page-1897">
    <div id="page" class="hfeed site">
        @include('layout.nav')
        
        
        @yield('content')


        @include('layout.footer')
    </div>
    
    @include('layout.scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
       
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
   
    @yield('script')
</body>
      
</html>
