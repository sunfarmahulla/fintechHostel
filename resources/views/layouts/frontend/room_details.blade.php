@include('layouts.frontend.header')
    <!-- BASE CSS -->
    <link href="{{asset('frontend/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/date_time_picker.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.theme.default.css')}}">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
@include('layouts.frontend.header_url')
    
@yield('content')

@include('layouts.frontend.footer')
<div id="toTop"></div><!-- Back to top button -->

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myReviewLabel" style="font-weight:500;">Write your review</h4>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				<form method="post" action="assets/review.php" name="review" id="review">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="form-control" name="room_type_review" id="room_type_review">
									<option value="">Select room type</option>
									<option value="Single room">Single Room</option>
									<option value="Double Room">Double Room</option>
									<option value="King double room">King Double Room</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Position</label>
								<select class="form-control" name="position_review" id="position_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Comfort</label>
								<select class="form-control" name="comfort_review" id="comfort_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Price</label>
								<select class="form-control" name="price_review" id="price_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Quality</label>
								<select class="form-control" name="quality_review" id="quality_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="form-group">
						<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
					</div>
					<div class="form-group">
						<input type="text" id="verify_review" class="form-control" placeholder="Are you human? 3 + 1 =">
					</div>
					<input type="submit" value="Submit" class="btn_1" id="submit-review">
				</form>
			</div>
		</div>
	</div>
</div><!-- End Modal Review -->
    
<!-- COMMON SCRIPTS -->

<script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('frontend/js/common_scripts_min.js')}}"></script>
<script src="{{asset('frontend/assets/validate.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>
<!-- SPECIFIC SCRIPTS -->
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
<script src="{{asset('frontend/js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('frontend/js/bootsrap_datepicker_func.js')}}"></script>

</body>
</html>
