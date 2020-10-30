<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Search College and Action Panel </h4>
            <div class="nk-block-des">
                <p><a href="{{url('/ad/clg-registration-form')}}" class="btn btn-info"><em class="icon ni ni-plus-round-fill"></em>&nbsp; &nbsp; Add College/ College Registration </a></p>
            </div>
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            
                <form action="ad/college-list" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                        <label class="form-label">Select State:</label>
                        </div>
                        <div class="col-sm-5">
                    
                            <div class="form-group">
                                
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" name="state_name" data-search="on">
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
                        <div class="col-sm-4">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            
        </div>
    </div>
</div>
