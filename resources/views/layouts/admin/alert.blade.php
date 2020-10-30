@if ($message = Session::get('danger'))

<div class="example-alert">
    <div class="alert alert-danger alert-icon alert-dismissible">
        <em class="icon ni ni-cross-circle"></em> <strong>Warning: </strong>!{{ $message }} <button class="close" data-dismiss="alert"></button></div>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))

<div class="example-alert">
    <div class="alert alert-warning alert-icon alert-dismissible">
        {{ $message }} <button class="close" data-dismiss="alert"></button></div>
    </div>
</div>
@endif

@if ($message = Session::get('error'))

<div class="example-alert">
    <div class="alert alert-danger alert-icon alert-dismissible">
        <em class="icon ni ni-cross-circle"></em> <strong>Error: </strong>!{{ $message }} <button class="close" data-dismiss="alert"></button></div>
    </div>
</div>
@endif
@if(count($errors))

  <div class="alert alert-danger alert-icon alert-dismissible">
  	<em class="icon ni ni-cross-circle"></em> <strong>Errors: </strong>!<button class="close" data-dismiss="alert"></button>

    <strong>Whoops!</strong> There were some problems with your input.

    <br/>

    <ul>

      @foreach($errors->all() as $error)

      <li>{{ $error }}</li>

      @endforeach

    </ul>

  </div>

@endif

@if ($message = Session::get('success'))

<div class="example-alert">
    <div class="alert alert-success alert-icon alert-dismissible">
        <em class="icon ni ni-check-circle-fill"></em> <strong>Success: </strong>!{{ $message }} <button class="close" data-dismiss="alert"></button></div>
    </div>
</div>
@endif

