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
                                <input type="text" class="form-control" name="state" id="full-name" required>
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
               <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
    <thead>
        <tr class="nk-tb-item nk-tb-head">
            
            <th class="nk-tb-col"><span class="sub-text">#</span></th>
            
            <th class="nk-tb-col tb-col-md"><span class="sub-text">State Name</span></th>
            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Total Registereed College</span></th>
            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
            <th class="nk-tb-col nk-tb-col-tools text-right">
            </th>
        </tr>
    </thead>
    <tbody>
       @foreach($data as $row)
        <tr class="nk-tb-item">
           

            <td class="nk-tb-col tb-col-md">
                <span>{{ $loop->iteration }}</span>
            </td>
           
            <td class="nk-tb-col tb-col-md">
                <span>{{$row->state_name}}</span>
            </td>
           
            <td class="nk-tb-col tb-col-lg">
                <span></span>
            </td>


            <td class="nk-tb-col tb-col-lg">
                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('d-m-Y')}}</span>
            </td>
           
            <td class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                    <li class="nk-tb-action-hidden">
                        <button class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#modalDefault{{$row->id}}" title="rename" data data-placement="top" title="Deactivate User">
                            <em class="icon ni ni-exchange"></em> Rename
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