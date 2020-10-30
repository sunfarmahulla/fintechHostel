@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">User Registration</h4>
            <div class="nk-block-des">
                <p>This registration is for adding basic User</p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">User Registration</h5>
            </div>
            <form action="{{url('/ad/user')}}" method="POST">
                @csrf
                @include('admin._partials.registration')
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@endsection