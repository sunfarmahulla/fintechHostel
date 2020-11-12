@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Employee Action Page</h4>
                <div class="nk-block-des">
                    <p>Action...</p>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" title="add state" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus-circle"></em>&nbsp;Add Target Service State</button>
        <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Target State Name</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{url('ad/clg-state')}}" method="POST" class="form-validate is-alter">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">Enter Target State Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" placeholder="name of state" name="state" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Target State</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init table">
                <thead>
                    <tr>
                        <th>Serial no.</th>
                        <th>Name Of State</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$row->state_name}}</td>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('d-m-Y')}}</td>
                        <td> <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalDefault{{$row->id}}" title="rename" data data-placement="top" title="Deactivate User"><em class="icon ni ni-edit"></em></button>
                            &nbsp;&nbsp;

                        <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modaldelete{{$row->id}}" title="rename" data data-placement="top" title="Deactivate User"><em class="icon ni ni-trash"></em></button>
                        <!-- rename model -->
                        <div class="modal fade" tabindex="-1" id="modalDefault{{$row->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit State Name</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="clg-state/{{$row->id}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Enter Target State Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="state_name" id="full-name" value="{{$row->state_name}}" required>
                                                </div>
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
                        <!-- delete modal -->
                        <div class="modal fade" tabindex="-1" id="modaldelete{{$row->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete State Name</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="clg-state/{{$row->id}}" method="post">
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
                        </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</div> <!-- nk-block -->

                                        

@endsection