<header>
    <div class="container">
        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="{{'/'}}" >
                <img src="{{asset('logo/logo.png')}}" width="70" height="60" alt="" data-retina="true">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <!-- <ul id="lang_top">
                <li><a href="#" class="active">EN</a></li>
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
            </ul> -->
            <div class="main-menu">
                <div id="header_menu">
                     <img src="img/logo_m.png" width="141" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li>
                    <a href="{{'/'}}" class="show-submenu">Home</a>
                    </li>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Auth<i class="icon-down-open-mini"></i></a>
                    <ul>
                    	<li><a href="{{url('/login')}}">Login</a></li>
                    	<li><a href="{{url('/register')}}">Register</a></li>
                       
                    </ul>
                    </li>
                    <li><a href="#">Flats</a></li>
                </ul>
            </div><!-- End main-menu -->
            
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
