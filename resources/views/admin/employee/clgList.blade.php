@extends('layouts.admin.app')

@section('content')

@include('admin._partials.clgListAndButton')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">List Of Colleges</h4>
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
                    <th>College Logo</th>
                    <th>College Name</th>
                    <th>State Name</th>
                    <th>Postel Id</th>
                    <th>Action</th>

                    
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{asset('images/'.$row->college_logo_url)}}" width="100px" height="100px"></td>
                    <td>{{$row->college_name}}</td>
                    <td>{{$row->state}}</td>
                    <td>{{$row->postel_id}}</td>
                    <td>
                        <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modaldelete{{$row->id}}" data data-placement="top" title="Deactivate User"><em class="icon ni ni-trash-fill"></em></button>

                         <div class="modal fade" tabindex="-1" id="modaldelete{{$row->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete College Name</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="ad/clg-registration/{{$row->id}}" method="post">
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
                        <button  class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalQuickView{{$row->id}}" data-placement="top" title="view"><em class="icon ni ni-eye"></em></button>
                        &nbsp;&nbsp;
                        <a  class="btn btn-trigger btn-icon" href="ad/clg-registration/{{$row->id}}" title="edit"><em class="icon ni ni-edit-alt-fill"></em></a>

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
                                        <center><img src="{{asset('images/'.$row->college_logo_url)}}" width="50px" height="50px"></center><br><br>
                                        </hr>
                                        <ul>
                                            <li>College Name: {{$row->college_name}}</li>
                                            <li>State Name: {{$row->state}}</li>
                                            <li>PinCode: {{$row->postel_id}}</li>
                                            <li>Address1: {{$row->college_address_1}}</li>
                                            <li>Address2: {{$row->college_address_2}}</li>
                                            <li>College Type: {{$row->college_type}}</li>
                                            <li>College Web Url: {{$row->college_web_url}}</li>
                                            <li>No. Of Hostel Near at: _________________</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>


@endsection
