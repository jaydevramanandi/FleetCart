<?php

namespace Modules\Testimonial\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Testimonial\Entities\Testimonial;

class TestimonialController
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index()
    {
        return view('storefront::public.testimonials.index', [
            'testimonials' => Testimonial::with('files')->get(),
        ]);
    }
}
