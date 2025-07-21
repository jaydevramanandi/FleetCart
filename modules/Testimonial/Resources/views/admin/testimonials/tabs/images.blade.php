@include('media::admin.image_picker.single', [
    'title' => trans('testimonial::testimonials.form.image'),
    'inputName' => 'files[logo]',
    'file' => $testimonial->logo,
])