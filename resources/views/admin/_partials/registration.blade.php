<div class="row g-4">
    <div class="col-lg-6">

        <div class="form-group">
            <label class="form-label" for="full-name-1">Full Name</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="name" id="full-name-1" value="{{old('name')}}">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="email-address-1">Email address</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="email" id="email-address-1" value="{{old('email')}}">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="phone-no-1">Phone No</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="mobile" id="phone-no-1" value="{{old('mobile')}}">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="pay-amount-1">Password</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" id="password" name="password">
            </div>
        </div>
    </div>
     <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="pay-amount-1">Confirm Password</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" id="" name="password_confirmation">
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">Register</button>
        </div>
    </div>
</div>
