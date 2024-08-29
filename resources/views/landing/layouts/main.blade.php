<!DOCTYPE html>
<html lang="en">

@include('landing.layouts.source')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        @include('landing.layouts.header')
        <!-- Header End -->

        <!-- Slider & Booking Start -->
        @include('landing.layouts.slider')
        <!-- Slider & Booking End -->

        @yield('content')

        <!-- Newsletter Start -->
        @include('landing.layouts.subkrep')
        <!-- Newsletter Start -->

        <!-- Footer Start -->
        @include('landing.layouts.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@include('landing.layouts.script')
</body>

</html>
