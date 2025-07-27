@extends('storefront::public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection

@section('content')
    <section
        x-data="ProductIndex"
        class="product-search-wrap"
    >

    <div class="main-container">
            <div class="product-search">
                <div class="product-search-left">
                    @if ($categories->isNotEmpty())
                        <nav class="sidebar" id="sidebar">
                            <h2>Categories</h2>
                            @include('storefront::public.products.index.browse_categories')                
                        </nav>
                    @endif
                    
                    {{--
                    @include('storefront::public.products.index.filter')
                    @include('storefront::public.products.index.latest_products')
                    --}}
                </div>
                

                <div class="product-search-right">
                    <template x-if="brandBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="brandBanner" alt="Brand banner">
                        </div>
                    </template>
                    
                    <template x-if="!brandBanner && categoryBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="categoryBanner" alt="Category banner">
                        </div>
                    </template>

                    @include('storefront::public.products.index.search_result')
                </div>
            </div>
        </div>

    {{--
        <div class="main-container">

            <div class="product-search">
            
            <nav class="sidebar" id="sidebar">
                <h2>Categories</h2>
                @include('storefront::public.products.index.browse_categories')                
            </nav>

            
                <section class=" ">
                    <nav class="breadcrumb container">
                    <a href="index.html">Home</a>
                    <span>›</span>
                    <a href="homeOffice.html">Learning, Activity & Books</a>
                    <span>›</span>
                    <span>Educational Books</span>
                    </nav>
                </section>

                <div class="product-search">
            
                <div class="product-search-right">
                    <template x-if="brandBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="brandBanner" alt="Brand banner">
                        </div>
                    </template>
                    
                    <template x-if="!brandBanner && categoryBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="categoryBanner" alt="Category banner">
                        </div>
                    </template>

                    @include('storefront::public.products.index.search_result')
                </div>

            </div>

            </div>
            
        </div>
        --}}

        {{--
        <div class="container">
            <div class="product-search">
                <div class="product-search-left">
                    @if ($categories->isNotEmpty())
                        <div class="d-none d-lg-block browse-categories-wrap">
                            <h4 class="section-title">
                                {{ trans('storefront::products.browse_categories') }}
                            </h4>

                            @include('storefront::public.products.index.browse_categories')
                        </div>
                    @endif
                    
                    @include('storefront::public.products.index.filter')
                    @include('storefront::public.products.index.latest_products')
                </div>


                <div class="product-search-right">
                    <template x-if="brandBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="brandBanner" alt="Brand banner">
                        </div>
                    </template>
                    
                    <template x-if="!brandBanner && categoryBanner">
                        <div class="d-none d-lg-block categories-banner">
                            <img :src="categoryBanner" alt="Category banner">
                        </div>
                    </template>

                    @include('storefront::public.products.index.search_result')
                </div>
            </div>
        </div>
        --}}
    </section>
@endsection

@push('globals')
    <script>
        FleetCart.data['initialQuery'] = '{{ addslashes(request('query')) }}';
        FleetCart.data['initialBrandName'] = '{{ addslashes($brandName ?? '') }}';
        FleetCart.data['initialBrandBanner'] = '{{ addslashes($brandBanner ?? '') }}';
        FleetCart.data['initialBrandSlug'] = '{{ addslashes(request('brand')) }}';
        FleetCart.data['initialCategoryName'] = '{!! addslashes($categoryName ?? '') !!}';
        FleetCart.data['initialCategoryBanner'] = '{{ addslashes($categoryBanner ?? '') }}';
        FleetCart.data['initialCategorySlug'] = '{{ addslashes(request('category')) }}';
        FleetCart.data['initialTagName'] = '{{ addslashes($tagName ?? '') }}';
        FleetCart.data['initialTagSlug'] = '{{ addslashes(request('tag')) }}';
        FleetCart.data['initialAttribute'] = {{ json_encode(request('attribute', [])) }};
        FleetCart.data['minPrice'] = {{ $minPrice }};
        FleetCart.data['maxPrice'] = {{ $maxPrice }};
        FleetCart.data['initialSort'] = '{{ addslashes(request('sort', 'latest')) }}';
        FleetCart.data['initialPage'] = {{ addslashes(request('page', 1)) }};
        FleetCart.data['initialPerPage'] = {{ addslashes(request('perPage', 20)) }};
        FleetCart.data['initialViewMode'] = '{{ addslashes(request('viewMode', 'grid')) }}';
        FleetCart.langs['storefront::products.showing_results'] = '{{ trans("storefront::products.showing_results") }}';
    </script>
    
    @vite([
        'modules/Storefront/Resources/assets/public/sass/pages/products/index/main.scss',
        'modules/Storefront/Resources/assets/public/js/pages/products/index/main.js',
    ])
@endpush
