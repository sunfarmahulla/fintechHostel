@extends('layouts.admin.app')

@section('content')


@include('admin._partials.htlListAndButton')

<div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">List Of Hostels</h4>
                <div class="nk-block-des">
                    <p>Action...</p>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
               <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">Registation Settings</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Hostel Provider Name</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Hostel Name</span></th>

                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Hostel Unique Id</span></th>
                            
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">State</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Pincode</span></th>
                            <th class="nk-tb-col nk-tb-col-tools text-right">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                    <label class="custom-control-label" for="uid1"></label>
                                </div>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span><a href="ad/htl/complete-registartion/{{$row->id}}" class="btn btn-primary">Complete Registration</a></span>
                            </td>
                            
                            <td class="nk-tb-col tb-col-md">
                                @php
                                	$id = $row->user_id;
                                	$data = App\Models\User::where('id',$id)->first();
                                @endphp

                                <span>Name:{{$data->name}}, Email:{{$data->email}}</span>
                            </td>
                           

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{$row->hostel_name}}</span>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{$row->unique_id}}</span>
                            </td>

                             <td class="nk-tb-col tb-col-lg">
                                <span>{{$row->state}}</span>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{$row->pin_code}}</span>
                            </td>

                            
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden">
                                        <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalDefault2{{$row->id}}" data data-placement="top" title="Deactivate User">
                                            <em class="icon ni ni-user-cross-fill"></em>
                                        </button>
                                    </li>
                                         <!---Model--------->

                                    <!-- Modal Content Code -->
                                    <div class="modal fade" tabindex="-1" id="modalDefault2{{$row->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <em class="icon ni ni-cross"></em>
                                                </a>
                                                <div class="modal-header">
                                                    <h5 class="modal-title">User Activate Action</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="h/activate/{{$row->id}}" method="POST">
                                                        @csrf
                                               
                                                        <div class="form-group">
                                                            <label class="form-label">Deactivate/Activate User</label>
                                                            <div class="form-control-wrap">
                                                                <select name="activate" class="form-select">
                                                                    <option value="1">Activate</option>
                                                                    <option value="0">Deactivate</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end model------->
                                    <li class="nk-tb-action-hidden">
                                        <button  class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalQuickView{{$row->id}}" data-placement="top" title="change role"><em class="icon ni ni-eye"></em>
                                        </button>
                                    </li>


                                    <div class="modal fade" tabindex="-1" id="modalQuickView{{$row->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <em class="icon ni ni-cross"></em>
                                                </a>
                                                <div class="modal-header">
                                                    <h5 class="modal-title">College Details</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <center><img src="{{asset('storage/app/public/images/$row->college_logo_url')}}" width="50px" height="50px"></center><br><br>
                                                </hr>
                                                <ul>
                                                    <li>College Name: {{$row->college_name}}</li>
                                                    <li>State Name: {{$row->state}}</li>
                                                    <li>PinCode: {{$row->postel_id}}</li>
                                                    <li>Address1: {{$row->address_1}}</li>
                                                    <li>Address2: {{$row->address_2}}</li>
                                                    <li>College Type: {{$row->college_type}}</li>
                                                    <li>College Web Url: {{$row->college_web_url}}</li>
                                                    <li>No. Of Hostel Near at: _________________</li>

                                                </ul>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <li class="nk-tb-action-hidden">
                                        <button  class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalDefault{{$row->id}}" data-placement="top" title="change role">
                                            <em class="icon ni ni-edit-alt-fill"></em>
                                        </button>
                                    </li>
                                    <!---Model--------->

                                    <!-- Modal Content Code -->
                                    <div class="modal fade" tabindex="-1" id="modalDefault{{$row->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <em class="icon ni ni-cross"></em>
                                                </a>
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Role</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="hostel/{{$row->id}}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label class="form-label">Change Role</label>
                                                            <div class="form-control-wrap">
                                                                <select name="role" class="form-select">
                                                                    <option value="user">Basic User</option>
                                                                    <option value="employee">Employee</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="hostelrp">Hostel Provider</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end model------->
                                    
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item  -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
</div><!---->

@endsection