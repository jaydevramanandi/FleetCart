<?php

namespace Modules\Testimonial\Entities;

use Modules\Support\Eloquent\TranslationModel;

class TestimonialTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
