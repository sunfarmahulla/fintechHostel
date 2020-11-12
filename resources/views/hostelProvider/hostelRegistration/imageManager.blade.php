@extends('layouts.hostel.app')

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
                                            <h4 class="nk-block-title">Image Manager</h4>
                                            <div class="nk-block-des">
                                                <p>Just add images or delete </p>
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
                                            <h6 class="overline-title">Image</h6>
                                        </div>
                                       
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Add Image</span>
                                                <!-- Modal Trigger Code -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDefault">Image Upload</button>

                                                <!-- Modal Content Code -->
                                                <div class="modal fade" tabindex="-1" id="modalDefault">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Image Upload</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-sm-12">
                                                            <form class="form" action="{{url('ad/htl/complete-registartion-image/'.$data->id)}}" method="post"  enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Image Upload</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                                            <input type="file" name="image" multiple class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-success" type="submit">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <span class="sub-text">Image Upload</span>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                                <!--end of Add Image Model -->
                                            </div>

                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        @foreach($images as $row)
                                        <div class="data-item">
                                            <div class="data-col">
                                              <img  src="{{asset('images/'.$row->image_url)}}" width="350px" height="250px" alt="">
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><a href="{{url('ad/htl/complete-registartion-image-trash/'.$row->id)}}" title="delete image"><em class="icon ni ni-cross-round-fill"></em></a></span></div>
                                        </div><!-- data-item -->
                                        @endforeach
                                       </div>
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