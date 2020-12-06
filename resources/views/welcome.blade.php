@extends('layouts.frontend.app')

@section('content')

<!-- SubHeader =============================================== -->
<div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="frontend/img/sub_header_home.jpg" data-natural-width="1400" data-natural-height="550">
    <div id="subheader_home">
        <div id="sub_content">
            <div id="book_container">
                <form method="post" action="assets/check_avail_home.php" id="check_avail_home" autocomplete="off">
                    <div id="group_1">
                        <div id="container_1">
                            <label>Arrival date</label>
                            <input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                            <span class="input-icon"><i class="icon-calendar-7"></i></span>
                        </div>
                        <div id="container_2">
                            <label>Departure date</label>
                             <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out" >
                            <span class="input-icon"><i class="icon-calendar-7"></i></span>
                        </div>
                    </div><!-- End group_1 -->
                    <div id="group_2">
                        <div id="container_3">
                            <label>Adults</label>
                            <div class="qty-buttons">
                                <input type="button" value="-" class="qtyminus" name="adults">
                                <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                <input type="button" value="+" class="qtyplus" name="adults">
                            </div>
                        </div>
                        <div id="container_4">
                            <label>Children</label>
                            <div class="qty-buttons">
                                <input type="button" value="-" class="qtyminus" name="children">
                                <input type="text" name="children" id="children" value="" class="qty form-control" placeholder="0">
                                <input type="button" value="+" class="qtyplus" name="children">
                            </div>
                        </div>
                    </div><!-- End group_2 -->
                    <div id="group_3">
                        <div id="container_5">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                        </div>
                        <div id="container_6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                        </div>
                    </div><!-- End group_3 -->
                    <div id="container_7">
                        <input type="submit" value="Check availability" class="btn_1" id="submit-booking">
                    </div>
                </form>
                <div id="message-booking"></div>
            </div><!-- End book_container -->
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</div><!-- End parallax-window -->
<!-- End SubHeader ============================================ -->
        
<div class="container margin_60">
      <h2 class="main_title"><em></em>Why We Us <span>Hotel and Bed&amp;Breakfast</span></h2>
        <p class="lead styled">
            Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.
        </p>

        <div class="row about">
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                   <h3>A beatiful contest</h3>
                        <p>
                            Esse dicit accusam duo an. Modus simul ei nec. Sea et explicari pertinacia, <strong>cu vitae bonorum</strong> vocibus nec, corpora signiferumque no vim. Ad principes scriptorem duo, te omnium gubergren eam, et eam ancillae appareat dissentiet. Quando tantas animal vis ut, mandamus voluptatum duo ne, ne odio vidit commodo has.
                        </p>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                <img src="frontend/img/about_1.jpg" alt="" class="img-responsive styled"> 
                </div>
      </div><!-- End row -->
        <div class="divider hidden-xs"></div>
       <div class="row about" >
            <div class="col-md-5 col-sm-6 col-md-offset-1 col-md-push-5">
                 <h3>Charming rooms</h3>
                        <p>
                            Esse dicit accusam duo an. Modus simul ei nec. Sea et explicari pertinacia, <strong>cu vitae bonorum</strong> vocibus nec, corpora signiferumque no vim. Ad principes scriptorem duo, te omnium gubergren eam, et eam ancillae appareat dissentiet. Quando tantas animal vis ut, mandamus voluptatum duo ne, ne odio vidit commodo has.
                        </p>
            </div>
            <div class="col-md-4 col-sm-6 col-md-offset-1 col-md-pull-6">
               <img src="frontend/img/about_2.jpg" alt="" class="img-responsive styled"> 
            </div>
        </div><!-- End row -->
      <div class="divider hidden-xs"></div>
        <div class="row about">
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                   <h3>Enjoy and relax</h3>
                        <p>
                            Esse dicit accusam duo an. Modus simul ei nec. Sea et explicari pertinacia, <strong>cu vitae bonorum</strong> vocibus nec.
                        </p>
                        <ul class="list_ok">
                            <li>Spa and Sauna</li>
                            <li>Body treatments</li>
                             <li>Swimming pool</li>
                        </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                <img src="img/about_3.jpg" alt="" class="img-responsive styled"> 
                </div>
      </div><!-- End row -->
    </div><!-- End container -->

        <div class="container_styled_1">
        <div class="container margin_60">
        <h3 class="main_title">General facilities<span>Ad principes scriptorem duo, te omnium gubergren eam.</span></h3>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="box_feat">
                        <i class="icon_set_1_icon-8"></i>
                        <h4>Patio garden</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                <div class="box_feat">
                        <i class="icon_set_1_icon-27"></i>
                        <h4>Parking</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                <div class="box_feat">
                        <i class="icon_set_1_icon-14"></i>
                        <h4>Room service</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="box_feat">
                        <i class="icon_set_1_icon-22"></i>
                        <h4>Pet allowed</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                <div class="box_feat">
                        <i class="icon_set_2_icon-103"></i>
                        <h4>Loundry service</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                <div class="box_feat">
                        <i class="icon_set_1_icon-13"></i>
                        <h4>Disable</h4>
                        <p>Ut postea legendos vim, usu an reque novum inimicus, cum aperiri molestiae splendide ea. Ad nam modus iudico rationibus.</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->

    <section class="promo_full">
    <div class="promo_full_wp">
        <div>
            <h3>What Clients say<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel_testimonials">
                        
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                        </div><!-- End carousel_testimonials -->
                    </div><!-- End col-md-8 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End promo_full_wp -->
    </div><!-- End promo_full -->
    </section><!-- End section -->    

@endsection