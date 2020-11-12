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
           <table class="datatable-init table">
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th> Registation Settings</th>
                        <th>Hostel Provider Name</th>
                        <th>Hostel Name</th>
                        <th>Hostel Unique Id</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="ad/htl/complete-registartion/{{$row->id}}" class="btn btn-primary">Complete Registration</a>
                        </td>
                        <td>
                            @php
                            	$id = $row->user_id;
                            	$data = App\Models\User::where('id',$id)->first();
                            @endphp

                            Name:{{$data->name}}&nbsp;&nbsp;Email:{{$data->email}}
                        </td>
                        <td>{{$row->hostel_name}}</td>
                        <td>{{$row->unique_id}}</td>
                        <td>{{$row->state}}</td>
                        <td>{{$row->pin_code}}</td>
                        <td>
                             <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modaldelete1{{$row->id}}" data data-placement="top" title="Delete element"><em class="icon ni ni-trash-fill"></em></button>

                             <div class="modal fade" tabindex="-1" id="modaldelete1{{$row->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete College Name</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="ad/htl/{{$row->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
                                                <h4>Are you sure! you want to delete...</h4>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer bg-light">
                                            <span class="sub-text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        &nbsp;&nbsp;

                         <a  class="btn btn-trigger btn-icon" href="ad/htl/{{$row->id}}/edit" title="change role"><em class="icon ni ni-edit-alt-fill"></em></a>

                         
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->


@endsection