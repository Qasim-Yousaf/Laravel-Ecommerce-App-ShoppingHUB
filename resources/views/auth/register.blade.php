<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


@include('user/layout/head')
<section class="main">
    <div class="layer">
        
        <div class="bottom-grid">
            <div class="logo">
            <h1> 
                <a href="{{route('userhome')}}"><span class="fa fa-arrow-left" style="color: white; font-size: 30px;padding-right:30px;padding-left: 10px;font-weight: bolder;">
                <a href="#"><span class="fa fa-key"></span> SHOPPING<i class="fa fa-shopping-cart"></i><span style="color :Red;font-weight: bolder;">HUB</span> |   REGISTER</a></h1>
            </div>
            <div class="links">
                <ul class="links-unordered-list">
                 
                    <li class="">
                        <a href="{{route('userhome')}}" class="">Home <i class="fa fa-home" style="color: white;"></i></a>
                    </li>
                       <li class="">
                        <a href="{{route('login')}}" class="">Login</a>
                    </li>
                    <li class="active">
                        <a href="{{route('register')}}" class="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-html5"></span>
            </div>
            <div class="content-bottom">

            <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Username">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                             <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                              <input id="password-confirm" type="password" class="" name="password_confirmation" required placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn">Click to Register</button>
                    </div>
                    <ul class="list-login">
                        <li class="switch-agileits">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                keep Logged in
                            </label>
                        </li>
                        <li>
                            <a href="#" class="text-right"></a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                    <ul class="list-login-bottom">
                        <li class="">
                            <a href="{{route('login')}}" class="">Back to login Page</a>
                        </li>
                        <li class="">
                            <a href="#" class="text-right">Need Help?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="bottom-grid1">
            <div class="links">
                <ul class="links-unordered-list">
                    <li class="">
                        <a href="#" class="">About Us</a>
                    </li>
                    <li class="">
                        <a href="#" class="">Privacy Policy</a>
                    </li>
                    <li class="">
                        <a href="#" class="">Terms of Use</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>© 2019 Key. All rights reserved | Design by
                    <a href="http://w3layouts.com">W3layouts</a>
                </p>
            </div>
        </div>
    </div>
</section>





</body>
</html>