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
            'name' => ['required'],
            'slug' => $this->getSlugRules(),
        ];
    }


    private function getSlugRules()
    {
        $rules = $this->route()->getName() === 'admin.testimonials.update'
            ? ['required']
            : ['sometimes'];

        $slug = Testimonial::withoutGlobalScope('active')->where('id', $this->id)->value('slug');

        $rules[] = Rule::unique('testimonials', 'slug')->ignore($slug, 'slug');

        return $rules;
    }
}
