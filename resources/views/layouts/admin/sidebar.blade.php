<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('logo/logo.png')}}" srcset="{{asset('logo/logo.png')}} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('logo/logo.png')}}" srcset="{{asset('logo/logo.png')}} 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{url('/home')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Home</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-mail"></em></span>
                            <span class="nk-menu-text">Mail Management</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Role Management</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">User Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/user')}}" class="nk-menu-link"><span class="nk-menu-text">User Registration</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/user/create')}}" class="nk-menu-link"><span class="nk-menu-text">Filter</span></a>
                            </li>
                            
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Employee Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/employee')}}" class="nk-menu-link"><span class="nk-menu-text">Employee Registartion</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/employee/create')}}" class="nk-menu-link"><span class="nk-menu-text">Employee Action</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">College Registration</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('ad/clg-state/create')}}" class="nk-menu-link"><span class="nk-menu-text">Target State</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/clg-registration')}}" class="nk-menu-link"><span class="nk-menu-text">College Registration</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Hostel Action</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/hostel')}}" class="nk-menu-link"><span class="nk-menu-text">Registration</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/hostel/create')}}" class="nk-menu-link"><span class="nk-menu-text">Action</span></a>
                            </li>
                             <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">Activity</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{url('/ad/hostel-list-view')}}" class="nk-menu-link"><span class="nk-menu-text">List Of Hostels</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>