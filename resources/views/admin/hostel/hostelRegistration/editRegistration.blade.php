@extends('layouts.admin.app')

@section('content')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Edit Hostel Registration Page</h4>
             <div class="nk-block-des">
                <p><input type="button" class="btn btn-primary" value="back" onclick="history.back()"/></p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Registration Form</h5>
            </div>
            <form action="ad/htl" class="gy-3" enctype="multipart/form-data" method="POST">
            @csrf

             <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Select Hostel Provider</label>
                            <span class="form-note">Select Hostel Provider and search by email or name</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Select Hostel Provider</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="user" data-search="on" required>
                                
                                @php 
                                    $data = \App\Models\User::where('role', 'hostelrp')->get();

                                @endphp

                                @foreach($data as $row)
                                    <option value="{{$row->id}}">Name: {{$row->name}}, email: {{$row->email}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Select State Name</label>
                            <span class="form-note">Select available state or first add</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Select State</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="state_name" data-search="on" required>
                                @php 
                                    $data = \App\Models\ServiceState::all();

                                @endphp

                                @foreach($data as $row)
                                    <option value="{{$row->state_name}}">{{$row->state_name}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Hostel Name</label>
                            <span class="form-note">Specify the proper fullname of hostel</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="htl_name"  value="{{old('htl_name')}}" placeholder="Hostel name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Hostel Address 1</label>
                            <span class="form-note"> Specify Hostel actual adddress 1</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="htl_address_1" value="{{old('htl_address_1')}}"  placeholder="Hostel Address 1" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Hostel Address 2</label>
                            <span class="form-note"> Specify hostel actual adddress 2</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="htl_address_2" value="{{old('htl_address_2')}}"  placeholder="hostel Address 2" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">City Name</label>
                            <span class="form-note">Specify the proper city name</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="htl_city"  value="{{old('htl_city')}}" placeholder="City name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Postel Code</label>
                            <span class="form-note">Specify the proper Postel code of hostel location</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="htl_pin"  value="{{old('htl_pin')}}" placeholder="postel code" required>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Select Hostel Type</label>
                            <span class="form-note">Select available Hostel Type</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Select Hostel/PG Type</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="htl_type" required data-search="on">
                                <option value="boys">Only Boys</option>
                                <option value="girls">Only Girls</option>
                                <option value="family">Family</option>
                                <option value="boys-girls">Both: Boys and girls</option>
                                <option value="flat">Flat</option>

                            </select>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Hostel Description</label>
                            <span class="form-note">Write Hostel Descriptions</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Hostel Description</label>
                        <div class="form-control-wrap">
                             
                            <div class="form-group">
                                <textarea id="editor" name="description">Write Short Hostel Description or About</textarea>
                            </div>
                      
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Hostel Policies</label>
                            <span class="form-note">Write Hostel Policies</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Hostel Policies</label>
                        <div class="form-control-wrap">
                             
                            <div class="form-group">
                                <textarea id="editor1" name="policies"></textarea>
                            </div>
                      
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Hostel Near By Places</label>
                            <span class="form-note">Write Hostel Near By places</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <label class="form-label">Hostel Near By Places</label>
                        <div class="form-control-wrap">
                             
                            <div class="form-group">
                                <textarea id="editor2" name="nearplace"></textarea>
                            </div>
                      
                        </div>
                    </div>
                    </div>
                </div>

               
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- card -->
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
  });
</script>

<script>
  tinymce.init({
    selector: 'textarea#editor1',
    skin: 'bootstrap',
    plugins: 'lists, link',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
  });
</script>

<script>
  tinymce.init({
    selector: 'textarea#editor2',
    skin: 'bootstrap',
    plugins: 'lists, link',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
  });
</script>


@endsection