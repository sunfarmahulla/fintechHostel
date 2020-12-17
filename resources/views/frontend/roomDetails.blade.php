@extends('layouts.frontend.room_details')

@section('content')
	<div class="carousel_in">
    @foreach($data->hostelConnectImage as $row)
      <div><img src="{{asset('images/'.$row->image_url)}}" alt=""><div class="caption"></div></div>
    @endforeach
    </div>
    
    
<h1 class="main_title_in" style="color:red">{{ucfirst($data->hostel_name)}}/{{ucfirst($data->hostel_type)}}</h1>
  <div class="container add_bottom_60">
        
        <div class="row">
        	<div class="col-md-8">
            <div id="single_room_feat">
                <ul>
                	
                    <li><i class="icon-location-7"></i>{{$data->address_1.', '.$data->address_2.', '.$data->city.', '.$data->state.', '.$data->pin_code}}</li>
                    
                </ul>
            </div>
            	 <div class="row">
                    <div class="col-md-3">
                        <h3>Description</h3>
                    </div>
                <div class="col-md-9">
                    <p>
                    {!!$data->description !!}
                    </p>
                    <h4>Room facilities</h4>
                    <p>
                    The Available room facilities are:
                    </p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <ul class="list_ok">
                                @foreach($data->hostelConnectFacility as $row)
                                    <li><i class="{{$row->icon_tag}}"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$row->facility_name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- End row  -->
                    <h4>Price details</h4>
                     <!-- start pricing table -->
                        <table class="table table-striped">
                        <tbody>
                        @if(!empty($data->hostelConnectPrice->actual_price))
                        <tr>
                            <td>Actual Price</td>
                            <td>{{$data->hostelConnectPrice->actual_price}} &#x20b9;</td>
                        </tr>
                        @endif
                        <tr>
                            <td>Discount Price</td>
                            <td>{{$data->hostelConnectPrice->discount_price}} &#x20b9;</td>
                        </tr>
                        @if(!empty($data->hostelConnectPrice->electricity_bill))
                        <tr>
                            <td>Electricity Price/dependent</td>
                            <td>{{$data->hostelConnectPrice->electricity_bill}} &#x20b9;</td>
                        </tr>
                        @endif
                        @if(!empty($data->hostelConnectPrice->water_bill))
                        <tr>
                            <td>Water Bill</td>
                            <td>{{$data->hostelConnectPrice->water_bill}} &#x20b9;</td>
                        </tr>

                        @endif

                        @if(!empty($data->hostelConnectPrice->fooding))
                        <tr>
                            <td>Fooding</td>
                            <td>{{$data->hostelConnectPrice->fooding}} &#x20b9;</td>
                        </tr>

                        @endif
                        </tbody>
                        </table>
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->
            <hr>
              <div class="row">
               <div class="col-md-3">
                    <h3>Near Colleges</hh3>
                </div>
                <div class="col-md-9">
                    <table class="table table-striped">
                        <tbody>
                        @foreach($data->hostelConnectNearCollege as $row)
                            
                            <tr>
                                <td><img src="{{asset('images/'.$row->clgRegister->college_logo_url)}}" width="25px" height="25px"></td>
                                <td>{{$row->clgRegister->college_name}}</td>
                                <td>distance</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
            <hr>
              <div class="row">
               <div class="col-md-3">
                    <h3>Near Places</hh3>
                </div>
                <div class="col-md-9">
                    {!!$data->near_by_places!!}
                </div>
            </div>

          	<hr>
              <div class="row">
               <div class="col-md-3">
                    <h3>Policies</h3>
                </div>
                <div class="col-md-9">
                    {!!$data->policies!!}
                </div>
            </div>
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
            
            </div><!-- End col -->
            
           
              <div class="col-md-4" id="sidebar">
            <div class="theiaStickySidebar">
            	<div class="box_style_1">
                    <div id="message-booking"></div>
                    <form method="post" action="assets/check_avail.php" id="check_avail" autocomplete="off" >                    	
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
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" name="mobile"  placeholder="Your mobile number">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Profession</label>
                                    <select class="form-control" name="profession" id="profession">
                                        <option value="student">student</option>
                                        <option value="job worker">Job worker</option>
                                        <option value="job seeker">Job Seeker</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    
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
           
@endsection
