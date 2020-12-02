
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="FC Recom - Hotel and Bed&amp;Breakfast">
    <meta name="author" content="Ansonika">
    <title>Hostel Connect</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('logo/logo.png')}}" type="{{asset('logo/logo.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" href=" {{asset('frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href=" {{asset('frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href=" {{asset('frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href=" {{asset('frontend/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- BASE CSS -->

    <link href="{{asset('frontend/css/base.css')}}" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/DateTimePicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">


</head>

<body>
    <div class="layer"></div>
   
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
     <!-- Header ================================================== -->
    <header>
    <div class="container">
        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="#" id="logo">
                <img src="{{asset('logo/logo.png')}}" width="190" height="23" alt="" data-retina="true">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <ul id="lang_top">
                <li><a href="#" class="active">EN</a></li>
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
            </ul>
            <div class="main-menu">
                <div id="header_menu">
                     <img src="img/logo_m.png" width="141" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
                    <ul>
                        <li><a href="index.html">Home Booking</a></li>
                        <li><a href="index_5.html">Home Booking date 2</a></li>
                        <li><a href="index_4.html">Home Carousel</a></li>
                        <li><a href="index_2.html">Home Layer Slider</a></li>
                        <li><a href="index_6.html">Home Video bg</a></li>
                        <li><a href="index_3.html">Home Text Rotator</a></li>
                    </ul>
                    </li>
                    <li><a href="room_list.html">Rooms</a></li>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Auth<i class="icon-down-open-mini"></i></a>
                    <ul>
                    	<li><a href="{{url('/login')}}">Login</a></li>
                    	<li><a href="{{url('/register')}}">Register</a></li>
                       
                    </ul>
                    </li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div><!-- End main-menu -->
            
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->
    
	 @yield('content')
    <div id="dtBox"></div><!-- End datepicker -->
    
     <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="img/logo_footer.png" width="141" height="40" alt="" id="logo_footer" data-retina="true">
					<ul id="contact_details_footer">
          				<li>Route de Sablet 1023, Marseille<br>France 01920</li>
                        <li><a href="tel://004542344599">+45 423 445 998</a> / <a href="#0"><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                    </ul>  
                </div>
                <div class="col-md-2 col-sm-4">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Contact us</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>                
                <div class="col-md-3 col-sm-4">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
					<div id="message-newsletter_2"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    	</form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                          <p>Copyright © 2016 <a target="_blank" title="Free CSS Themes" href="http://freecssthemes.com/">FreeCSSThemes</a>  |  All Right Reserved</p>

                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
        
<!-- COMMON SCRIPTS -->

<script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('frontend/js/common_scripts_min.js')}}"></script>
<script src="{{asset('frontend/assets/validate.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>

<script type="text/javascript" src="{{asset('frontend/js/DateTimePicker.js')}}"></script>
<script type="text/javascript">$("#dtBox").DateTimePicker();</script>
</body>
</html>