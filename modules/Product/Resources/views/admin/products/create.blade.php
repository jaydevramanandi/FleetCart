@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('product::products.product')]))

    <li><a href="{{ route('admin.products.index') }}">{{ trans('product::products.products') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('product::products.product')]) }}</li>
@endcomponent

@section('content')
    <div id="app" v-cloak></div>
@endsection

@include('product::admin.products.partials.shortcuts')
@include('product::admin.products.partials.scripts')

@push('globals')
    <script>
        FleetCart.permissions = @json($permissions);
        FleetCart.data['brands'] = @json($brands);
        FleetCart.data['categories'] = @json($categories);
        FleetCart.data['tax-classes'] = @json($taxClasses);
        FleetCart.data['tags'] = @json($tags);
        FleetCart.data['attribute-sets'] = @json($attributeSets);
        FleetCart.data['global-variations'] = @json($globalVariations);
        FleetCart.data['global-options'] = @json($globalOptions);
    </script>

    @vite([
        'modules/Product/Resources/assets/admin/sass/main.scss',
        'modules/Product/Resources/assets/admin/js/create.js',
        'modules/Attribute/Resources/assets/admin/sass/main.scss',
        'modules/Variation/Resources/assets/admin/sass/main.scss',
        'modules/Option/Resources/assets/admin/sass/main.scss',
        'modules/Media/Resources/assets/admin/sass/main.scss',
        'modules/Media/Resources/assets/admin/js/main.js',
    ])
@endpush
