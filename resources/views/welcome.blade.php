@extends('layouts.frontend.app')

@section('content')
<style>
.parallax-window #subheader_home #sub_content h1 { font-weight: 300; color:skyblue; font-size: 38px; margin: 0px 0px 0px 0px; line-height: 120%; font-family: 'Open sans', sans-serif; }
</style>
<!-- SubHeader =============================================== -->
<div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="frontend/img/banner.jpeg" data-natural-width="1400" data-natural-height="550">
    <div id="subheader_home">
        <div id="sub_content">
            <div id="book_container">
                <form method="post" action="/room-list" id="check_avail_home" autocomplete="off">
                    @csrf
                    @method('get')
                    <div id="group_3">
                        
                        <div id="container_5">
                            <label>Lets Get Started!</label>
                            <input type="text" class="form-control" name="location" id="name_booking" placeholder="search by Location" >
                        </div>
                       
                    </div><!-- End group_3 -->
                    <div id="container_6">
                        <input type="submit" value="Check availability" class="btn_1" id="submit-booking">
                    </div>
                </form>
                <div id="message-booking"></div>
            </div><!-- End book_container -->
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</div><!-- End parallax-window -->
        
<div class="container margin_60">
      <h2 class="main_title"><em></em>Why Hostel Connect?<span>Hotels and Flats</span></h2>
        <!-- <p class="lead styled">
            Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.
        </p> -->

        <div class="row about">
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                        <p style="padding:20px;">
                            <h1 style="font-size:3vw;">EXPLORE BEST</h1><h1 style="font-size:3vw;">OF STAYS</h1>
                        </p>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                <img src="frontend/img/about6.jpg" alt="" class="img-responsive styled"> 
                </div>
        </div><!-- End row -->
        <div class="divider hidden-xs"></div>
       <div class="row about" >
            <div class="col-md-5 col-sm-6 col-md-offset-1 col-md-push-5">
                 <!-- <h3>Charming rooms</h3>
                        <p>
                            Esse dicit accusam duo an. Modus simul ei nec. Sea et explicari pertinacia, <strong>cu vitae bonorum</strong> vocibus nec, corpora signiferumque no vim. Ad principes scriptorem duo, te omnium gubergren eam, et eam ancillae appareat dissentiet. Quando tantas animal vis ut, mandamus voluptatum duo ne, ne odio vidit commodo has.
                        </p> -->
                        <p style="padding:0px;">
                            <h1 style="font-size:3vw;">KNOW YOUR<h1 style="font-size:3vw;"> SECOND HOME</h1></h1><h1 style="font-size:3vw;">INSIDE OUT</h1> <h1 style="font-size:3vw;">BEFORE MOVING IN</h1>
                        </p>
            </div>
            <div class="col-md-4 col-sm-6 col-md-offset-1 col-md-pull-6">
               <img src="frontend/img/about4.jpg" alt="" class="img-responsive styled"> 
            </div>
        </div><!-- End row -->
      <div class="divider hidden-xs"></div>
        <div class="row about">
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                        <p>
                        <h1 style="font-size:3vw;">HASSLE FREE BOOKING</h1><h1 style="font-size:3vw;">WITHOUT ANY</h1><h1 style="font-size:3vw;">COMMISSION OR</h1><h1 style="font-size:3vw;">CONVINIENCE FEES.</h1>
                        </p>
                        <!-- <ul class="list_ok">
                            <li>Spa and Sauna</li>
                            <li>Body treatments</li>
                             <li>Swimming pool</li>
                        </ul> -->
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                <img src="frontend/img/about5.jpeg" alt="" class="img-responsive styled"> 
                </div>
      </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider hidden-xs"></div>
        <div class="row about">
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                    <img src="frontend/img/about2.png" alt="" class="img-responsive styled"> 
                </div>
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                        <p>
                        <h1 style="font-size:3vw;">GET EXCITING</h1><h1 style="font-size:3vw;">REWARDS ON</h1><h1 style="font-size:3vw;">EVERY BOOKING.</h1>
                        </p>
                        <!-- <ul class="list_ok">
                            <li>Spa and Sauna</li>
                            <li>Body treatments</li>
                             <li>Swimming pool</li>
                        </ul> -->
                </div>
                
      </div><!-- End row -->
    </div><!-- End container -->
</br></br>
    
@endsection