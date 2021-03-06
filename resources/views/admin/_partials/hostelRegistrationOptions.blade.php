 <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
<div class="card-inner-group" data-simplebar>
    <div class="card-inner">
        <div class="user-card">
            
            <div class="user-info">
                <span class="lead-text">{{ucfirst($data->hostel_name)}}</span>
                <span class="sub-text">{{$user->email}}</span>
            </div>
           
        </div><!-- .user-card -->
    </div><!-- .card-inner -->
    
    <div class="card-inner p-0">
        <ul class="link-list-menu">
            <li><a class="active" href="{{url('ad/htl/complete-registartion/'.$data->id)}}"><em class="icon ni ni-info-fill"></em><span>Hostel Infomation</span></a></li>
            <li><a href="{{url('ad/htl/complete-registartion-image/'.$data->id)}}"><em class="icon ni ni-file-img"></em><span>Image Manager</span></a></li>
            <li><a href="{{url('ad/htl/complete-registartion-facility/'.$data->id)}}"><em class="icon ni ni-building"></em><span>Facility Manager</span></a></li>
            <li><a href="{{url('ad/htl/complete-registartion-price/'.$data->id)}}"><em class="icon ni ni-sign-inr"></em><span>Price settings</span></a></li>
            <li><a href="{{url('ad/htl/complete-registartion-hc-near-by-collage/'.$data->id)}}"><em class="icon ni ni-building"></em><span>Near by Collage settings</span></a></li>
        </ul>
    </div><!-- .card-inner -->
</div><!-- .card-inner-group -->
</div><!-- card-aside -->