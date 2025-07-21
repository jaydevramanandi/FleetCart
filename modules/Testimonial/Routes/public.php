<?php

use Illuminate\Support\Facades\Route;

Route::get('testimonials', 'TestimonialController@index')->name('testimonials.index');

Route::get('testimonials/{testimonial}/products', 'TestimonialProductController@index')->name('testimonials.products.index');
