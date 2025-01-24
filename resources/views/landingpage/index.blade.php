@extends('landingpage.layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('landingpage.sections.hero')
    <!-- Featured Services Section -->
    @include('landingpage.sections.featured_services')

    <!-- Call To Action Section -->
    @include('landingpage.sections.calltoaction')

    <!-- About Section -->
    @include('landingpage.sections.about')

    <!-- Stats Section -->
    {{-- @include('landingpage.sections.stats') --}}

    <!-- Features Section -->
    {{-- @include('landingpage.sections.features') --}}

    <!-- Services Section -->
    @include('landingpage.sections.services')

    <!-- Appointment Section -->
    {{-- @include('landingpage.sections.appointment') --}}

    <!-- Testimonials Section -->
    @include('landingpage.sections.testimonials')

    <!-- Gallery Section -->
    {{-- @include('landingpage.sections.gallery') --}}

    <!-- Contact Section -->
    @include('landingpage.sections.contact')
@endsection
