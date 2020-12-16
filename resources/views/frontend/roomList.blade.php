@extends('layouts.frontend.app')

@section('content')
<style>
@media screen and (max-width: 800px) {
  .filter {
    display: none;
  }
}
@media screen and (min-width: 800px) {
    .filter2 {
        display: none;
    }
}
@media screen and (max-width: 800px) {
    .filter2 {
        display: block;
    }
}
</style>
   
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="frontend/img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <h1>Our Wonderfull Rooms</h1>
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->

        <div class="container margin_60">
    	<div class="row">
            <div class="col-lg-3 col-md-4 sidebar filter">
     		
                <div class="theiaStickySidebar">
                    <div class="box_style_3" id="general_facilities">
                    <form class="form" action="#" method="get">
                        @csrf
                    <div class="row">
                        <div class="col-sm-6"><h3>Filter</h3></div>
                        <div class="col-sm-6"><button type="submit" class="btn btn_1">Apply Filter</button></div>

                    </div>
                        
                        <div class="form-group">
                            <label for="">College/Instituet</label>
                            <input type="text" placeholder="search by institue name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" placeholder="search by location in banglore" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Hostel/Pg type</label>
                            <select class="form-control">
                                <option value="">Boys only</option>
                                <option value="">Girls Only</option>
                                <option value="">Boys/Girls</option>
                                <option value="">Flat</option>

                            </select>
                        </div>
                        </form>
                    </div>
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-90"></i>
                        <h4>Need help? Call us</h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 sidebar filter2" >
     		
                <div class="theiaStickySidebar">
                    <button class="btn btn-primary" type="">Hello Filter</button>

                </div>
            </div>
            
 			<div class="col-lg-9 col-md-8">
             
            	<div class="row">
                
                	<div class="room_desc clearfix" onclick="location.href='/room-details';">
                	<div class="col-md-7">
                    	<figure><img src="frontend/img/room_list_1.jpg" alt="" class="img-responsive"></figure>
                    </div>
                    <div class="col-md-5 room_list_desc">
                    	<h3>Single Room</h3>
                        <p>Id tale utinam ius, an mei omnium recusabo iracundia. Mea ad postea meliore fuisset.....</p>
                        <ul>
                        	<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                	<div class="tooltip-content">King size bed</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                	<div class="tooltip-content">Shower</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                	<div class="tooltip-content">Plasma TV</div>
                              </div>
                              </li>
                        </ul>
                        <div class="price">from <strong>$115</strong> /night<small>Breakafst included</small></div>
                    </div>
                    </div>
                </div><!-- End row room -->  
                
                <div class="row">
                	<div class="room_desc clearfix wow fadeIn" onclick="location.href='room_detail.html';" data-wow-delay="0.1s">
                	<div class="col-md-7">
                    	<figure><img src="frontend/img/room_list_2.jpg" alt="" class="img-responsive"></figure>
                    </div>
                    <div class="col-md-5 room_list_desc">
                    	<h3>Double Room</h3>
                        <p>Id tale utinam ius, an mei omnium recusabo iracundia. Mea ad postea meliore fuisset.....</p>
                        <ul>
                        	<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                	<div class="tooltip-content">King size bed</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                	<div class="tooltip-content">Shower</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                	<div class="tooltip-content">Plasma TV</div>
                              </div>
                              </li>
                        </ul>
                        <div class="price">from <strong>$115</strong> /night<small>Breakafst included</small></div>
                    </div>
                    </div>
                </div><!-- End row room --> 
                
                <div class="row">
                	<div class="room_desc clearfix wow fadeIn" onclick="location.href='room_detail.html';" data-wow-delay="0.1s">
                	<div class="col-md-7">
                    	<figure><img src="frontend/img/room_list_3.jpg" alt="" class="img-responsive"></figure>
                    </div>
                    <div class="col-md-5 room_list_desc">
                    	<h3>Double Room Luxury</h3>
                        <p>Id tale utinam ius, an mei omnium recusabo iracundia. Mea ad postea meliore fuisset.....</p>
                        <ul>
                        	<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                	<div class="tooltip-content">King size bed</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                	<div class="tooltip-content">Shower</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                	<div class="tooltip-content">Plasma TV</div>
                              </div>
                              </li>
                                <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                	<div class="tooltip-content">Safe box</div>
                              </div>
                              </li>
                        </ul>
                        <div class="price">from <strong>$115</strong> /night<small>Breakafst included</small></div>
                    </div>
                    </div>
                </div><!-- End row room --> 
                
                <div class="row">
                	<div class="room_desc clearfix wow fadeIn" onclick="location.href='room_detail.html';" data-wow-delay="0.1s">
                	<div class="col-md-7">
                    	<figure><img src="frontend/img/room_list_4.jpg" alt="" class="img-responsive"></figure>
                    </div>
                    <div class="col-md-5 room_list_desc">
                    	<h3>Suite Room</h3>
                        <p>Id tale utinam ius, an mei omnium recusabo iracundia. Mea ad postea meliore fuisset.....</p>
                        <ul>
                        	<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                	<div class="tooltip-content">King size bed</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                                	<div class="tooltip-content">Bathtub</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                	<div class="tooltip-content">Plasma TV</div>
                              </div>
                              </li>
                               <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_1_icon-15"></i></span>
                                	<div class="tooltip-content">Welcome bottle</div>
                              </div>
                              </li>
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                	<div class="tooltip-content">Safe box</div>
                              </div>
                              </li>
                        </ul>
                        <div class="price">from <strong>$115</strong> /night<small>Breakafst included</small></div>
                    </div>
                    </div>
                </div><!-- End row room -->    
                
            </div>
            
        </div><!-- End row -->        
    </div><!-- End container -->

<script src="{{asset('frontend/js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('.sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>


@endsection