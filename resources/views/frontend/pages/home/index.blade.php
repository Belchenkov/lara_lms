@extends('frontend.layouts.master')

@section('content')
    {{-- Hero Section --}}
    @include('frontend.pages.home.sections.hero-section')

    {{-- Category Section  --}}
    @include('frontend.pages.home.sections.category-section')

    {{-- About Section  --}}
    @include('frontend.pages.home.sections.about-section')

    {{-- Courses Section  --}}
    @include('frontend.pages.home.sections.courses-section')

    {{-- Offer Section  --}}
    @include('frontend.pages.home.sections.offer-section')

    {{-- BECOME INSTRUCTOR Section  --}}
    @include('frontend.pages.home.sections.become-instructor-section')

    {{-- Video Section  --}}
    @include('frontend.pages.home.sections.video-section')

    {{-- Brand Section  --}}
    @include('frontend.pages.home.sections.brand-section')


    {{-- Quality Section  --}}
    @include('frontend.pages.home.sections.quality-course-section')

    {{-- Testimonial Section  --}}
    @include('frontend.pages.home.sections.testimonial-section')

    {{-- Blog Section  --}}
    @include('frontend.pages.home.sections.blog-section')
@endsection
