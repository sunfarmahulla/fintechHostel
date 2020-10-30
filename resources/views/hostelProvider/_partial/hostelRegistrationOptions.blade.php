 <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
<div class="card-inner-group" data-simplebar>
    <div class="card-inner">
        <div class="user-card">
            
            <div class="user-info">
                <span class="lead-text">{{ucfirst('hostel_name')}}</span>
                <span class="sub-text">{{auth::user()->email}}</span>
            </div>
           
        </div><!-- .user-card -->
    </div><!-- .card-inner -->
    
    <div class="card-inner p-0">
        <ul class="link-list-menu">
            <li><a class="active" href="#"><em class="icon ni ni-user-fill-c"></em><span>Hostel Registration</span></a></li>
            <li><a href="#"><em class="icon ni ni-bell-fill"></em><span>Image Manager</span></a></li>
            <li><a href="#"><em class="icon ni ni-activity-round-fill"></em><span>Facility Manager</span></a></li>
            <li><a href="#"><em class="icon ni ni-lock-alt-fill"></em><span>Price settings</span></a></li>
           
        </ul>
    </div><!-- .card-inner -->
</div><!-- .card-inner-group -->
</div><!-- card-aside -->