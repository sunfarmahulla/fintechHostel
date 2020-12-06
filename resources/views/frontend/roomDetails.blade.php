@extends('layouts.frontend.app')

@section('content')
	<div class="carousel_in">
      <div><img src="img/room_detail_1.jpg" alt=""><div class="caption"><h3>Fantastic bed room</h3></div></div>
      <div><img src="img/room_detail_2.jpg" alt=""><div class="caption"><h3>Equiped bathroom</h3></div></div>
      <div><img src="img/room_detail_3.jpg" alt=""><div class="caption"><h3>Equiped bathroom</h3></div></div>
      <div><img src="img/room_detail_4.jpg" alt=""><div class="caption"><h3>Nice outdoor</h3></div></div>
      <div><img src="img/room_detail_5.jpg" alt=""><div class="caption"><h3>Swimming pool</h3></div></div>
    </div>
    
    
    <h1 class="main_title_in">Double Room</h1>
    <div class="container add_bottom_60">
        
        <div class="row">
        	<div class="col-md-8" id="room_detail_desc">
            <div id="single_room_feat">
                <ul>
                	<li><i class="icon_set_1_icon-7"></i>Wifi</li>
                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                    <li><i class="icon_set_2_icon-104"></i>King size bed</li>
                    <li><i class="icon_set_2_icon-111"></i>Bathtub</li>
                    <li><i class="icon_set_2_icon-106"></i>Safe box</li>
                </ul>
            </div>
           
         <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.  Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at.
                    </p>
                    <h4>Room facilities</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>Coffee machine</li>
                                <li>Wifi</li>
                                <li>	Microwave</li>
                                <li>Oven</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>Fridge</li>
                                <li>Hairdryer</li>
                                <li>Towels</li>
                                <li>Toiletries</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    	 <ul class="list_ok">
                                <li>DVD player</li>
                                <li>Air-conditioning</li>
                                <li>Tv</li>
                                <li>Freezer</li>
                            </ul>
                    </div>
                    </div><!-- End row  -->
                    <h4>Room Prices</h4>
                     <!-- start pricing table -->
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Low (from 23/03 to 31/05)</td>
                            <td>140$</td>
                        </tr>
                        <tr>
                            <td>Middle (from 23/03 to 31/05)</td>
                            <td>180$</td>
                        </tr>
                        <tr>
                            <td>High (from 23/03 to 31/05)</td>
                            <td>200$</td>
                        </tr>
                        </tbody>
                        </table>
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

          	<hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3>Reviews</h3>
                    <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a>
                </div>
                <div class="col-md-9">
                	<div id="score_detail"><span>7.5</span>Good <small>(Based on 34 reviews)</small></div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Position
                                    <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                                <li>Comfort
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Price
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                                <li>Quality
                                <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                    
                    <hr>
                    <div class="review_strip_single">
                        <img src="img/avatar1.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single">
                        <img src="img/avatar2.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single last">
                        <img src="img/avatar3.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                </div>
            </div>  
            <hr>
            <div class="row">
            <div class="col-md-3">
                    <h3>Policies</h3>
                </div>
                <div class="col-md-9">
                <ul id="policies">
                    <li><i class="icon_set_1_icon-83"></i><h5>Check-in and check-out.</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-54"></i><h5>Cancellation</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-47"></i><h5>Smoking</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-35"></i><h5>Payments</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>
                    <li><i class="icon_set_1_icon-13"></i><h5>Disable</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>                    
                    </ul>
                </div>
                </div>
            </div><!-- End col -->
            
              <div class="col-md-4" id="sidebar">
            <div class="theiaStickySidebar">
            	<div class="box_style_1">
                    <div id="message-booking"></div>
                    <form method="post" action="assets/check_avail.php" id="check_avail" autocomplete="off" >
                    <input name="room_type" id="room_type" type="hidden" value="Double room">	
                    	<div class="row">
                        	<div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Arrival date</label>
                            	   	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Departure date</label>
                            	   <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                               </div>
                            </div>
                        </div><!-- End row -->
                        <div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Adults</label>
                            	   <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Children</label>
                            	    <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="children">
                                        <input type="text" name="children" id="children"  value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="children">
                                    </div>
                               </div>
                            </div>
                        </div><!-- End row -->
           				<div class="row">
                        	
                              <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Name</label>
                            	 		<input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Email</label>
                            	 		<input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                   <div class="form-group">
                                   <input type="submit" value="Book now" class="btn_full" id="submit-booking">
                                   </div>
                                   </div>
                             </div>
                        </form>
                        <hr>
                        <a href="#0" class="btn_outline"> or Contact us</a>
                        <a href="tel://004542344599" id="phone_2"><i class="icon_set_1_icon-91"></i>+45 423 445 99</a>
                     
                </div><!-- End box_style -->
            </div><!-- End theiaStickySidebar -->
            </div><!-- End col -->
            
        </div><!-- End row -->
                
    </div><!-- End container -->
    

    
    <div id="dtBox"></div><!-- End datepicker -->
<script>
  $('.carousel_in').owlCarousel({
    center: true,
    items:1,
    loop:true,
	 autoplay:true,
	 navText: [ '', '' ],
	addClassActive: true,
    margin:5,
    responsive:{
        600:{
            items:1
        },
		 1000:{
            items:2,
			nav:true,
        }
    }
});
</script>
@endsection