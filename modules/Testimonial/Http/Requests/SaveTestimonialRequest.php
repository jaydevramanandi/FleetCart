<?php

namespace Modules\Testimonial\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Core\Http\Requests\Request;

class SaveTestimonialRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'testimonial::attributes';


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|max:255',
            'designation'   => 'nullable|string|max:255',
            'message'       => 'required|string',
            'is_active'     => 'sometimes|boolean',            
        ];
    }
}