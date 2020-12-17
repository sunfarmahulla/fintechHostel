@extends('layouts.admin.app')

@section('content')

@php

$data = App\Models\HostelRegistration::where('id',$id)->first(); 
$user = App\Models\User::where('id',$data->user_id)->first();
@endphp
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Hostel Information</h4>
                                            <div class="nk-block-des">
                                                <p>all info, like name and address</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Basics</h6>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Hostel Full Name</span>
                                                <span class="data-value">{{$data->hostel_name}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Owner Name</span>
                                                <span class="data-value">{{ucfirst($user->name)}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{$user->email}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Phone Number</span>
                                                <span class="data-value text-soft">{{$user->mobile}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Hostel Type</span>
                                                <span class="data-value text-soft">{{$data->hostel_type}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">State</span>
                                                <span class="data-value">{{$data->state}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Address_1</span>
                                                <span class="data-value">{{$data->address_1}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Address_2</span>
                                                <span class="data-value">{{$data->address_2}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">City</span>
                                                <span class="data-value">{{$data->city}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Pin Code</span>
                                                <span class="data-value">{{$data->pin_code}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Description</span>
                                                <span class="data-value">{!!$data->description!!}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Policies</span>
                                                <span class="data-value">{!!$data->policies!!}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                         <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Near_by_places</span>
                                                <span class="data-value">{!!$data->near_by_places!!}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                   <!--  <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Preferences</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Language</span>
                                                <span class="data-value">English (United State)</span>
                                            </div>
                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Date Format</span>
                                                <span class="data-value">M d, YYYY</span>
                                            </div>
                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Timezone</span>
                                                <span class="data-value">Bangladesh (GMT +6)</span>
                                            </div>
                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                        </div> -->
                                    <!-- </div> -->
                                </div><!-- .nk-block -->
                            </div>
                          @include('admin._partials.hostelRegistrationOptions')
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection