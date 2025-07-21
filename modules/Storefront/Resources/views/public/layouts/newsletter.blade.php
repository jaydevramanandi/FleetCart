@if (setting('newsletter_enabled') && json_decode(Cookie::get('show_newsletter_popup', true)))
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">                
                <h3 class="newsletter-title">Get the latest news and offers</h3>
                <form x-ref="form" @submit.prevent="subscribe" class="newsletter-form">
                    <div class="newsletter-form">
                        <input
                        type="text"
                        class="newsletter-input"
                        placeholder="Enter Email"
                        @input="subscribed = false"
                        x-model="email"
                        >                        
                        <button class="newsletter-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endif