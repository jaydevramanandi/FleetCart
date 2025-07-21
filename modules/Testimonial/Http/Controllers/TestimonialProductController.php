<?php

namespace Modules\Testimonial\Http\Controllers;

use Illuminate\Http\Response;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Product\Entities\Product;
use Modules\Product\Filters\ProductFilter;
use Modules\Product\Http\Controllers\ProductSearch;

class TestimonialProductController
{
    use ProductSearch;

    /**
     * Display a listing of the resource.
     *
     * @param string $slug
     * @param Product $model
     * @param ProductFilter $productFilter
     *
     * @return Response
     */
    public function index($slug, Product $model, ProductFilter $productFilter)
    {
        request()->merge(['testimonial' => $slug]);

        if (request()->expectsJson()) {
            return $this->searchProducts($model, $productFilter);
        }

        $testimonial = Testimonial::findBySlug($slug);

        return view('storefront::public.products.index', [
            'testimonialName' => $testimonial->name,
            'testimonialBanner' => $testimonial->banner->path,
        ]);
    }
}
