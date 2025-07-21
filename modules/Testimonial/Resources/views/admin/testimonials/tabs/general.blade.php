<div class="row">
    <div class="col-md-8">
        {{ Form::text('name', trans('testimonial::attributes.name'), $errors, $testimonial, ['required' => true]) }}

        {{ Form::text('designation', trans('testimonial::attributes.designation'), $errors, $testimonial) }}

        {{ Form::textarea('message', trans('testimonial::attributes.message'), $errors, $testimonial, ['required' => true, 'rows' => 4]) }}

        {{ Form::checkbox('is_active', trans('testimonial::attributes.is_active'), trans('testimonial::testimonials.form.enable_the_testimonial'), $errors, $testimonial) }}
    </div>
</div>