<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <!-- Favicon -->
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/x-icon" href="giaodien/giaodien/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="giaodien/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="giaodien/css/default.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="giaodien/css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="giaodien/css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->

@include('Frontend.layout.header')


@yield('content')

<!-- Footer Starts -->
@include('Frontend.layout.footer')
<!-- Footer Ends -->

<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-image">
                <img src="images/logo-black.png" alt="image">
            </div>
            <h3>Hello!Sign into your account</h3>
            <form>
                <div class="form-group">
                    <input type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Enter password">
                </div>
                <div class="form-group form-checkbox">
                    <input type="checkbox"> Remember Me
                    <a href="#">Forgot password?</a>
                </div>
            </form>
            <div class="form-btn">
                <a href="#" class="btn btn-orange">LOGIN</a>
                <p>Need an Account?<a href="#"> Create your Hotux account</a></p>
            </div>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-image">
                <img src="giaodien/images/logo-black.png" alt="image">
            </div>
            <h3>Awesome! Create a Hotux Account</h3>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm password">
                </div>
            <div class="form-btn">
                <a href="#" class="btn btn-orange">SIGN UP</a>
            </div>
            </form>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa-bed fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- *Scripts* -->
<script src="giaodien/js/jquery-3.3.1.min.js"></script>
<script src="giaodien/js/bootstrap.min.js"></script>
<script src="giaodien/js/plugin.js"></script>
<script src="giaodien/js/main.js"></script>
<script src="giaodien/js/custom-nav.js"></script>
<script src="giaodien/js/custom-swiper1.js"></script>
<script src="giaodien/js/custom-singledate.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('script')
</body>
</html>
