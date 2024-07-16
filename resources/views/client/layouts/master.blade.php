<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   @include('client.layouts.partials.css')
</head>

<body>
    <!-- Topbar Start -->
    @include('client.layouts.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('client.layouts.partials.navbar')
    <!-- Navbar End -->

    @yield('content')
   
    <!-- Footer Start -->
    @include('client.layouts.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('client.layouts.partials.js')
</body>

</html>