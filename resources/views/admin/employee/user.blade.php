@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Employee Registration</h4>
            <div class="nk-block-des">
                <p>Please your organization employee</p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Customer Info S2</h5>
            </div>
            <form action="{{url('/ad/employee')}}" method="POST">
                @csrf
                
                @include('admin._partials.registration')
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@endsection