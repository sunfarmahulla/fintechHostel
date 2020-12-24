@extends('layouts.frontend.app')

@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Khula:700);

.hidden {
  opacity:0;
}
.console-container {
 
  font-family:Khula;
  font-size:2em;
  text-align:center;
  height:200px;
  width:600px;
  display:block;
  position:absolute;
  color:white;
  top:0;
  bottom:0;
  left:0;
  right:0;
  margin:auto;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}
</style>
<!-- SubHeader =============================================== -->
<div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="frontend/img/banner.jpeg" data-natural-width="1400" data-natural-height="550">
    <div id="subheader_home">
        <div id="sub_content">
        <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div></br>
        <!-- <div><h2 style="color:#000;">Welcome to</br> hostel connect</h2></div> -->
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
<script>
// function([string1, string2],target id,[color1,color2])    
consoleText(['Welcome To Hostel Connect'], 'text',['tomato','rebeccapurple']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
</script>
@endsection