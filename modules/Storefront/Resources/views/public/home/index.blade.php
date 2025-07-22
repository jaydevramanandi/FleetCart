@extends('storefront::public.layout')

@section('title', setting('store_tagline'))

@section('content')

<!-- Hero Section -->
@includeUnless(is_null($slider), 'storefront::public.layouts.hero_section')

<!-- Categories Section -->
@include('storefront::public.layouts.categories')

<!-- New Arrivals Section -->
@include('storefront::public.layouts.new_arrivals')

<!-- Testimonials Section -->
@include('storefront::public.layouts.testimonials')

<!-- Newsletter Section -->
@include('storefront::public.layouts.newsletter')

@endsection

@push('meta')
    <meta name="description" content="{{ setting('store_description') }}">
@endpush

@push('globals')
    @vite([
        'modules/Storefront/Resources/assets/public/sass/pages/home/main.scss',
        'modules/Storefront/Resources/assets/public/js/pages/home/main.js',
    ])
@endpush
