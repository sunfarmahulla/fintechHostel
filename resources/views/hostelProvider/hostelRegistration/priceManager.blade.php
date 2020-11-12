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
                                            <h4 class="nk-block-title">Price/bill Manager</h4>
                                            <div class="nk-block-des">
                                                <p>Just add Price or bill for your hostel </p>
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
                                            <h6 class="overline-title">Price</h6>
                                        </div>
                                       
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Edit Price</span>
                                                <!-- Modal Trigger Code -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDefault">Edit Price</button>

                                                <!-- Modal Content Code -->
                                                <div class="modal fade" tabindex="-1" id="modalDefault">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Price Manager</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-sm-12">
                                                            @if(empty($price))
                                                                <form class="form" action="{{url('ad/htl/complete-registartion-price/'.$data->id)}}" method="post"  enctype="multipart/form-data">
                                                            @else
                                                                <form class="form" action="{{url('ad/htl/complete-registartion-price-edit/'.$data->id)}}" method="post"  enctype="multipart/form-data">

                                                            @endif

                                                                @csrf
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Actual Price</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                                            <input type="number" min="1" class="form-control" name="actual_price" placeholder="Actual Price" required="" value="{{empty($price->actual_price)? '': $price->actual_price}}">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Discount Price</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                           
                                                                            <input type="number" min="1" class="form-control" name="discount_price" placeholder="Discount Price" required="" value="{{empty($price->discount_price)? '': $price->discount_price}}">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Electricity Price</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                           
                                                                            <input type="text" min="1" class="form-control" name="electricity_bill" placeholder="Electricity Charge per month" required="" value="{{empty($price->electricity_bill)? '': $price->electricity_bill}}">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Water Price</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                           
                                                                            <input type="text" min="1" class="form-control" name="water_bill" placeholder="Water Charge per month" required="" value="{{empty($price->water_bill)? '': $price->water_bill}}">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Fooding</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                           
                                                                            <input type="text" min="1" class="form-control" name="fooding" placeholder="Fooding Charge per month" required="" value="{{empty($price->fooding)? '': $price->fooding}}">
                                                                            
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