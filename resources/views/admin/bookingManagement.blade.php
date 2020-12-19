@extends('layouts.admin.app')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">List of hostel bookings</h4>
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
                        <th>Status</th>
                        <th>Date of booking</th>
                        <th>Booked Hostel Link</th>
                        <th>Mobile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profession</th>
                        <th>Gender</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                        @if($row->mark_as_read == 0)
                            <button class="btn btn-warning" data-toggle="modal" data-target="#modaledit{{$row->id}}" data data-placement="top" title="change status"><em class="icon ni ni-loader"></em>&nbsp;Pending</button>
                        @elseif($row->mark_as_read == 1)
                            <button class="btn btn-success" data-toggle="modal" data-target="#modaledit{{$row->id}}" data data-placement="top" title="change status"><em class="icon ni ni-check-circle-cut"></em>&nbsp;Success</button>
                        @else
                            <button class="btn btn-danger" data-toggle="modal" data-target="#modaledit{{$row->id}}" data data-placement="top" title="change status"><em class="icon ni ni-cross-circle"></em>&nbsp;close&nbsp;</button>
                        @endif
                        </td>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('d-M-Y')}}</td>
                        <td>
                            <a href="{{url('/room-details/'.$row->hostel_connect_id)}}" class="btn btn-dim btn-info" rel="noopener noreferrer" target="_blank">Check Hostel &nbsp;<em class="icon ni ni-forward-alt-fill"></em></a>
                        </td>
                        <td>{{$row->mobile}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->profession}}</td>
                        <td>{{$row->gender}}</td>
                        
                            <div class="modal fade" tabindex="-1" id="modaledit{{$row->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Hostel Booking Status</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="ad/list-of-booked-hostel-edit/{{$row->id}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Change Status</label>
                                                    <select class="form-control" name="status" id="status">
                                                        <option value="1">success</option>
                                                        <option value="0">pending</option>
                                                        <option value="-1">close</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer bg-light">
                                            <span class="sub-text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->

@endsection