<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from www.spruko.com/demo/viboon/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:15:47 GMT -->
@include('partials.head')

	<body class="">
		@if(Request::routeIs('dashboard'))
			<div id="global-loader" ></div>
		@endif
		<div class="page" >
			<div class="page-main">
				@include('partials.header')
                
                @include('partials.nav')

				<div class="my-3 my-md-5">
					@yield('content')
				</div>
            </div>
            @include('sweetalert::alert')
			@include('partials.footer')
		</div>
		<!-- Back to top -->
		@include('partials.scripts')
	</body>

<!-- Mirrored from www.spruko.com/demo/viboon/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:15:51 GMT -->
</html>