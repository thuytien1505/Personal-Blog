<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>My Blog</title>
	<!--<link rel="stylesheet" href="style.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/favicon.png')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- fonts -->
	<script src="https://kit.fontawesome.com/6e4540c13e.js" crossorigin="anonymous"></script>

	<!-- font family -->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Hanalei&family=Lobster&family=PT+Serif&display=swap" rel="stylesheet">

	<!-- slick carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<!-- Owl-Carousel -->
	<!-- <link rel="stylesheet" href="{{URL::asset('assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/owl.theme.default.min.css')}}"> -->

	<!-- AOS library -->
	<link rel="stylesheet" href="/css/aos.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- 	custom styling -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css"> <!-- style main -->
    <link rel="stylesheet" href="/css/footer.css" type="text/css" > <!-- footer  -->
    <link rel="stylesheet" href="/css/reset.css" type="text/css" >
    <!-- <link rel="stylesheet" href="/css/shared.css" type="text/css" > -->
    <link rel="stylesheet" href="/css/post.css" type="text/css" >  <!-- content of post --> <!-- page content -->
   <!--  <link rel="stylesheet" href="{{asset('css/header.css')}}"> -->
    <link rel="stylesheet" href="/css/blog.css" type="text/css"> <!-- page blog -->

    <link rel="stylesheet" href="{{URL::asset('css/poster.css')}}" type="text/css"> <!-- category & poster -->

    <link rel="stylesheet" href="{{URL::asset('css/featured.css')}}" type="text/css"> <!-- all_content -->
    <link rel="stylesheet" href="{{URL::asset('css/new_post.css')}}" type="text/css"> <!-- new post - index page -->
    <link rel="stylesheet" href="{{URL::asset('css/banner.css')}}" type="text/css">   <!-- banner - index -->
    <link rel="stylesheet" href="{{URL::asset('css/book_library.css')}}" type="text/css"> <!-- book_library - index page -->
    <!-- <link rel="stylesheet" href="{{URL::asset('css/mobile.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{URL::asset('css/slide.css')}}"> -->
</head>
<body>
	<!--GSAP ANimation Library-->
    <script src="js/gsap/gsap.min.js"></script>
    <!-- menu -->
    @include('layouts.menu')
	<!-- End menu -->
	
    
	@yield('content')

	<!-- zalo -->
	<!-- <div class="zalo-chat-widget" data-oaid="427529605932292622" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script> -->
	<!-- end zalo -->
	<!-- scroll to top -->
	<!-- <button class="scrollTop" onclick="topFunction()" id="btn-Top">Top</button>
	<script>
		var myTop = document.getElementById('btn-Top');
		  windown.onscroll = function(){scrollFunction()};

		  function scrollFunction(){
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		      myTop.style.display = "block";
		    }else{
		      myTop.style.display = "none";
		    }
		  }

		  function topFunction(){
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		  }
	</script> -->
	<!-- end scroll to top -->
    <!-- footer -->
	<footer class="footer">
	    <div class="slogan" data-aos="zoom-out-left" data-aos-delay="200">The World most Interesting Blog!</div>
	    <div class="logo" data-aos="flip-right" data-aos-delay="200">
	        <img src="{{ asset('img/logo-placeholder.png')}}">
	    </div>
	    <hr />
	    <div class="bottom">
	        <div class="social-group">
	            <div class="social-icon facebook"></div>
	            <div class="social-icon twitter"></div>
	            <div class="social-icon linked"></div>
	            <div class="social-icon youtube"></div>
	        </div>
	        <div class="copyrights">Made by Anbcdeptraivkl and Cong Dat © Copyrights 2020</div>
	        <div class="move_up">
				<span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
			</div>
	    </div>
    </footer>	
    <!-- end footer -->

<!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- slick carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- aos js -->
<script type="text/javascript" src="/js/aos.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	  AOS.init();
</script>

<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/mobile.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slide_post.js')}}"></script>
<!-- owl-Carousel js -->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<!-- <script src="/js/parallax.min.js"></script>
<script>
  var rellax = new Rellax('.rellax');
</script> -->
</body>
</html>