@extends('storefront::public.layout')

@section('title', setting('store_tagline'))

@section('content')
    
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
