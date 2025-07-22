@if(!empty($testimonials))
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Testimonials</h2>
            
            <div class="testimonials-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "autoPlay": 4000, "pageDots": true, "prevNextButtons": false, "cellAlign": "center", "contain": true, "draggable": true, "freeScroll": false, "friction": 0.28, "selectedAttraction": 0.025, "freeScrollFriction": 0.075 }'>

                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-card">
                        @if ($testimonial->logo->path)
                            <img src="{{ $testimonial->logo->path }}" alt="{{ $testimonial->name }}" class="testimonial-avatar">
                        @else
                            <img src="{{ asset('build/assets/images/svg/avtar.svg') }}" alt="{{ $testimonial->name }}" class="testimonial-avatar">
                        @endif
                        
                        <div class="testimonial-content">
                            <img src="{{ asset('build/assets/images/svg/quote-left.svg') }}" alt="Quote" class="quote-mark-start">
                            <p class="testimonial-text">
                                {{ $testimonial->message }}
                            </p>
                            <div class="testimonial-author">
                                <h4 class="author-name">{{ $testimonial->name }}</h4>
                                <p class="author-title">{{ $testimonial->designation }}</p>
                            </div>
                            <img src="{{ asset('build/assets/images/svg/quote-right.svg') }}" alt="Quote" class="quote-mark-end">
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
@endif