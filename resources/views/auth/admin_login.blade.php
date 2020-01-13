<!DOCTYPE html>
<html lang="en">

<head>

@include('admin/layout.head')
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>


</head>

<body>
<section class="main">
    <div class="layer">
         @if(count($errors)> 0)
                            @foreach ($errors ->all() as $error)
                           <p class="alert alert-danger">{{ $error}}</p>
                            @endforeach
                                @endif
        <div class="bottom-grid">
            <div class="logo">
                <h1>
                    <a href="{{route('userhome')}}"><span class="fa fa-arrow-left" style="color: white; font-size: 30px;padding-right:30px;padding-left: 10px;"></span></a>
                 <a href="index.html"><span class="fa fa-key"></span>SHOPPING<i class="fa fa-shopping-cart"><span style="color:Red;font-weight: bolder;font-family:;">HUB&nbsp;</span></i> |&nbsp; Admin Login</a></h1>
            </div>
            <div class="links">
                <ul class="links-unordered-list">
                    <li class="">
                        <a href="#" class=""></a>
                    </li>
                    <li class="">
                        <a href="#" class=""></a>
                    </li>
                    <li class="">
                        <a href="#" class=""></a>
                    </li>
                    <li class="">
                        <a href="#" class=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-html5"></span>
            </div>
            <div class="content-bottom">
                   <form role="form" action="{{route('admin_login')}}" method="POST">
                            @csrf
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                             <input class="" placeholder="E-mail" name="email" type="email" placeholder="Username">

                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            
                                    <input class="" placeholder="Password" name="password" type="password" value="">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn">LOGIN</button>
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
                            <a href="#" class="text-right">forgot password?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                    <ul class="list-login-bottom">
                        <li class="">
                            <a href="{{route('userhome')}}" class="">Back to User Home</a>
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

@include('admin/layout/footer')
</body>

</html>
