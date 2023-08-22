
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('frontend_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layout.inc.style')
</head>

<body>
    <!--Start Preloader-->
    @include('frontend.layout.inc.preloade')
    <!-- search-form here -->
    @include('frontend.layout.inc.search')
    <!-- search-form here -->
    <!-- header-area start -->
    @include('frontend.layout.inc.header')
    <!-- header-area end -->
    @yield('frontend_content')
    <!-- start social-newsletter-section -->
    @include('frontend.layout.inc.newsletter')
    <!-- end social-newsletter-section -->
    <!-- .footer-area start -->
    @include('frontend.layout.inc.footer')
    <!-- .footer-area end -->
    @include('frontend.layout.inc.script')
</body>


<!-- Mirrored from themepresss.com/tf/html/tohoney/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 03:33:34 GMT -->
</html>
