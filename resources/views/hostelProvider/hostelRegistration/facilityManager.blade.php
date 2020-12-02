@extends('layouts.hostel.app')

@section('content')

@php 
$data = \App\Models\HostelRegistration::where('user_id', Auth::user()->id)->first();

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
                                            <h4 class="nk-block-title">Facility Manager</h4>
                                            <div class="nk-block-des">
                                                <p>Just add facility or delete </p>
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
                                            <h6 class="overline-title">Facility</h6>
                                        </div>
                                       
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Add Facility</span>
                                                <!-- Modal Trigger Code -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDefault">Add New Facility</button>

                                                <!-- Modal Content Code -->
                                                <div class="modal fade" tabindex="-1" id="modalDefault">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Facility</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-sm-12">
                                                            <form class="form" action="{{url('htl/hp/complete-registartion-facility/'.$data->id)}}" method="post"  enctype="multipart/form-data">
                                                                @csrf
                                                                    <input type="hidden" name="id" value="{{$data->id}}">

                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Select Facility Icon</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select form-control form-control-lg" name="font_icon" data-search="on" required>
                                                                         
                                                                                <option value="fa fa-wifi">wifi</option>
                                                                                <option value="fas fa-air-conditioner">ac</option>
                                                                          </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Facility Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" placeholder="enter facility name"  name="facility" required="">
                                                                    </div> 
                                                                </div>
                                                                <button class="btn btn-success" type="submit">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <span class="sub-text">Add Facility</span>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                                <!--end of Add Image Model -->
                                            </div>

                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        @foreach($facilities as $row)
                                        <div class="data-item">
                                            <div class="data-col">
                                              <span class="data-label">{{$row->icon_tag}}</span>
                                                <span class="data-value text-soft">{{$row->facility_name}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><a href="{{url('htl/hp/complete-registartion-facility-trash/'.$row->id)}}" title="delete image"><em class="icon ni ni-cross-round-fill"></em></a></span></div>
                                        </div><!-- data-item -->
                                        @endforeach
                                       </div>
                                </div><!-- .nk-block -->
                            </div>
                          @include('hostelProvider._partial.hostelRegistrationOptions')
                         
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection