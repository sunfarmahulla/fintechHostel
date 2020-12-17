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
                    <form class="form" action="filter" method="get">
                        @csrf
                        @method('get')
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
                    <button class="btn btn_1" type="">Apply Filter</button>
                </div>
            </div>
            
 			<div class="col-lg-9 col-md-8">
             
             @forelse ($data as $row)
            	<div class="row">
                
                	<div class="room_desc clearfix" onclick="location.href='/room-details/{{$row->id}}';">
                	<div class="col-md-7">
                    	<figure>
                        @foreach($row->hostelConnectImage->slice(0, 1) as $key)
                            <img src="{{asset('images/'.$key->image_url)}}" alt="" class="img-responsive">
                        @endforeach
                        </figure>
                    </div>
                    <div class="col-md-5 room_list_desc">
                    	<h3>{{ucfirst($row->hostel_type)}} Hostel</h3>
                        <p>{!!substr($row->description, 0,60)!!}...</p>
                        <ul>
                        @foreach($row->hostelConnectFacility as $key)
                        	<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="{{$key->icon_tag}}"></i></span>
                                	<div class="tooltip-content">{{$key->facility_name}}</div>
                              </div>
                              </li>
                            <li>
                        @endforeach
                        </ul>
                        
                        <div class="price">Available Price: <strong><s>{{$row->hostelConnectPrice->actual_price}}</s>/{{$row->hostelConnectPrice->discount_price}}</strong> /month<small>Breakafst included</small></div>
                        
                    </div>
                    </div>
                </div><!-- End row room -->  
                @empty
                <p>Sorry! no data found</p>
                @endforelse
                
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