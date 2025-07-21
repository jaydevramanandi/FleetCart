@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('testimonial::testimonials.testimonial')]))

    <li><a href="{{ route('admin.testimonials.index') }}">{{ trans('testimonial::testimonials.testimonials') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('testimonial::testimonials.testimonial')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.testimonials.store') }}" class="form-horizontal" id="testimonial-create-form" novalidate>
        {{ csrf_field() }}

        {!! $tabs->render(compact('testimonial')) !!}
    </form>
@endsection

@include('testimonial::admin.testimonials.partials.shortcuts')

@push('globals')
    @vite([
        'modules/Testimonial/Resources/assets/admin/js/main.js',
        'modules/Media/Resources/assets/admin/sass/main.scss',
        'modules/Media/Resources/assets/admin/js/main.js',
    ])
@endpush
