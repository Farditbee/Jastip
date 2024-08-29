@extends('landing.layouts.main')
        <!-- Slider & Booking End -->
@section('content')
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

@endsection

