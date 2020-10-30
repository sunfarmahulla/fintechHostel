@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">User Action Page</h4>
                <div class="nk-block-des">
                    <p>Action...</p>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                @include('admin._partials.actiontable')
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
</div><!---->

@endsection