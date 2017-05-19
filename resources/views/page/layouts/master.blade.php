<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/vegur_400.font.js"></script>
    <script src="js/Vegur_bold_700.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/tms-0.4.x.js"></script>
    <script src="js/jquery.jqtransform.js"></script>
    <script src="js/FF-cash.js"></script>
    <script>
		$(document).ready(function(){
			$('.form-1').jqTransform();					   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="Home">
<!--==============================header=================================-->
<header>
    <div>
        <h1><a href="Home.html"><img src="images/logo.jpg" alt=""></a></h1>
        <div class="social-icons">
        	<span>Follow Us:</span>
            <a href="#" class="icon-3"></a>
            <a href="#" class="icon-2"></a>
            <a href="#" class="icon-1"></a>
        </div>
        <div id="slide">		
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slider-2.jpg" alt="" /></li>
                    <li><img src="images/slider-1.jpg" alt="" /></li>
                    <li><img src="images/slider-3.jpg" alt="" /></li>
					<li><img src="images/slider-5.jpg" alt="" /></li>
					<li><img src="images/slider-4.jpg" alt="" /></li>
                </ul>
            </div>	
            <a href="#" class="prev"></a><a href="#" class="next"></a>
        </div>
        <nav>
            <ul class="menu">
                <li class="{{ Request::is('/') ? "current" : "" }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('book-now') ? "current" : "" }}"><a href="/book-now">Book now</a></li>
                <li class="{{ Request::is('special-events') ? "current" : "" }}"><a href="/special-events">Special Events</a></li>
                <li class="{{ Request::is('contact-us') ? "current" : "" }}"><a href="/contact-us">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>   
<!--==============================content================================-->
    @yield('content')

</div>    
<!--==============================footer=================================-->
    <footer>
        <p>© 2017 by The Villa Lombok</p>
    </footer>	    
<script>
	Cufon.now();
</script>
</body>
</html>