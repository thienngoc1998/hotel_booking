<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="giaodien/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="giaodien/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="giaodien/css/default.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="giaodien/css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="giaodien/css/plugin.css" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="giaodien/css/dashboard.css" rel="stylesheet" type="text/css">
    <!--Icons CSS-->
    <link href="giaodien/css/icons.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->

<!-- start Container Wrapper -->
<div id="container-wrapper">
    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        @include('Backend.layouts.sticky-nav')
        @include('Backend.layouts.nav')
        @yield('content')
        <!-- Content / End -->
        <!-- Copyrights -->
        <div class="copyrights">
            <p>2019 <i class="fa fa-copyright" aria-hidden="true"></i> Hotux by <a href="https://www.cyclonethemes.com" target="_blank">Cyclone Themes</a></p>
        </div>
    </div>
    <!-- Dashboard / End -->
</div>
<!-- end Container Wrapper -->


<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- *Scripts* -->
<script src="giaodien/js/jquery-3.3.1.min.js"></script>
<script src="giaodien/js/bootstrap.min.js"></script>
<script src="giaodien/js/plugin.js"></script>
<script src="giaodien/js/main.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="giaodien/js/chart.js"></script>
<script src="giaodien/js/dashboard.js"></script>
</body>
</html>
