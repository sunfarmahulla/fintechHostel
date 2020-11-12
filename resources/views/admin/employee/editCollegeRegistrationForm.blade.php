@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Registration Page</h4>
            <div class="nk-block-des">
                <p><input type="button" class="btn btn-primary" value="back" onclick="history.back()"/></p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Registration Form</h5>
            </div>
            <form action="clg-registration/{{$collegeData->id}}" class="gy-3" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Select State Name</label>
                            <span class="form-note">Select available state or first add</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Select State</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="state_name" data-search="on" required>
                                <option value="{{$collegeData->state}}">{{$collegeData->state}}</option>
                                @php 
                                    $data = \App\Models\ServiceState::all();

                                @endphp

                                @foreach($data as $row)
                                    <option value="{{$row->state_name}}">{{$row->state_name}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">College Name</label>
                            <span class="form-note">Specify the proper fullname of college</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="clg_name"  value="{{!empty($collegeData->college_name)? $collegeData->college_name : old('clg_name')}}" placeholder="College name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">College Address 1</label>
                            <span class="form-note"> Specify college actual adddress 1</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="clg_address_1" value=""  placeholder="college Address 1" required>{{!empty($collegeData->college_address_1)? $collegeData->college_address_1: old('clg_address_1')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">College Address 2</label>
                            <span class="form-note"> Specify college actual adddress 2</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="clg_address_2" value=""  placeholder="college Address 2" required>{{!empty($collegeData->college_address_2)? $collegeData->college_address_2 : old('clg_address_2')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">City Name</label>
                            <span class="form-note">Specify the proper city name</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="clg_city"  value="{{!empty($collegeData->city)? $collegeData->city : old('clg_city')}}" placeholder="City name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Postel Code</label>
                            <span class="form-note">Specify the proper Postel code of college location</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="clg_pin"  value="{{!empty($collegeData->postel_id)? $collegeData->postel_id : old('clg_pin')}}" placeholder="postel code" required>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Select College Type</label>
                            <span class="form-note">Select available college Type</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Select College Type</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="clg_type" required data-search="on">
                                <option value="{{$collegeData->college_type}}">{{$collegeData->college_type}}</option>
                                <option value="engineering">Engineering</option>
                                <option value="university">University</option>
                                <option value="law">Law</option>
                                <option value="medical">Medical</option>
                                <option value="research">Research</option>

                            </select>
                        </div>
                    </div>
                    </div>
                </div>
                 <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">College Website Url</label>
                            <span class="form-note">optional field if exist</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="clg_web_url"  value="{{old('clg_web_url')}}" placeholder="college web url">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">College Logo</label>
                            <span class="form-note">Upload logo</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label class="form-label" for="default-06">Upload logo</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" multiple class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- card -->
</div>

@endsection