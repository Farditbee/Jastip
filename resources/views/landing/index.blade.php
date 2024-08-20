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


        <!-- About Start -->
        @include('landing.layouts.about')
        <!-- About End -->


        <!-- Room Start -->
        @include('landing.layouts.room')
        <!-- Room End -->


        <!-- Video Start -->
        @include('landing.layouts.video')
        <!-- Video Start -->


        <!-- Service Start -->
        @include('landing.layouts.service')
        <!-- Service End -->


        <!-- Testimonial Start -->
        @include('landing.layouts.testi')
        <!-- Testimonial End -->


        <!-- Team Start -->
        @include('landing.layouts.team')
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            {{-- <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
