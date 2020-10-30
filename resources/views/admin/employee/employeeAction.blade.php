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
            <th class="nk-tb-col"><span class="sub-text">User</span></th>
            
            <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
            
            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>

            
            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
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
            <td class="nk-tb-col">
                <div class="user-card">
                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                        <span>{{strtoupper(substr($row->name, 0,2))}}</span>
                    </div>
                    <div class="user-info">
                        <span class="tb-lead">{{ucfirst($row->name)}}<span class="dot dot-success d-md-none ml-1"></span></span>
                        <span>{{$row->email}}</span>
                    </div>
                </div>
            </td>
            
            <td class="nk-tb-col tb-col-md">
                <span>{{$row->mobile}}</span>
            </td>
            <td class="nk-tb-col tb-col-lg" data-order="Email Unverified - Kyc Unverified">
                <ul class="list-status">
                    @if(empty($row->email_verified_at))
                    <li><em class="icon ni ni-cross-circle-fill"></em> <span>Email</span></li>
                    @else
                    <li><em class="icon ni ni-check-circle"></em> <span>Email</span></li>

                    @endif
                </ul>
            </td>

            <td class="nk-tb-col tb-col-lg">
                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('d-m-Y')}}</span>
            </td>
            <td class="nk-tb-col tb-col-md">
                 @if($row->activate == 1)
                <span class="tb-status text-success">Active</span>
                @else
                <span class="tb-status text-danger">Deactive</span>
                @endif
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
                                    <form action="e/activate/{{$row->id}}" method="POST">
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
                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                            <em class="icon ni ni-mail-fill"></em>
                        </a>
                    </li>
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
                                    <form action="employee/{{$row->id}}" method="POST">
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
                    <li>
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                    
                                    <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
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