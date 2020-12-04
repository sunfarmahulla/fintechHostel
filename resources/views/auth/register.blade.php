<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Hostel Connect-Signup</title>
    
    <link rel="stylesheet" href="{{asset('css/signUpStyle.css')}}">
    <style>
        #wrapper{
            margin-left:auto;
            margin-right:auto;
            width:600px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class=" submit-content">
                <div class="submit-img " style=" outline-style: outset; outline-color:#149fbb; outline-width:2px;">
                    <div class="overlay overlay-bg">
                        <img src="https://colorlib.com/etc/platina/img/about-img.jpg" alt="" />
                        <div class="submit-img-content">
                            <h1>WELCOME TO</h1>
                            <p>Hostel Connect</p>
                        </div>
                    </div>
                </div>
                <div class="wrap-submit p-l-50 p-r-50 p-t-72 p-b-50 "  style="outline-style: outset; outline-color: #149fbb; outline-width: 5px;">
                    <form class="submit-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="submit-form-title p-b-59" style="color: #094753;">
                            Sign Up
                        </span>
                        <div>
                            <span class="label-submit">Name</span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <span class="focus-submit"></span>
                        </div>
                        <div>
                            <span class="label-submit">Email</span>
                            <input id="email" class="submit" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="focus-submit"></span>
                        </div>
                        <div>
                            <span class="label-submit">Password</span>
                            <input id="password" type="password" class="submit" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="focus-submit"></span>
                        </div>

                        <div>
                            <span class="label-submit">Confirm Password</span>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <span class="focus-submit"></span>
                        </div>
                       
                        <div class="container-signup-form-btn">
                            <div class="wrap-signup-form-btn">
                                <div class="signup-form-bgbtn"></div>
                                <button class="signup-form-button" type="submit">
                                    <span>Signup</span>
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
