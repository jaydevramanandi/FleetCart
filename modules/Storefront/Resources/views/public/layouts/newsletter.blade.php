@if (setting('newsletter_enabled') && json_decode(Cookie::get('show_newsletter_popup', true)))
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">                
                <h3 class="newsletter-title">Get the latest news and offers</h3>
                

                <form x-data="newsletterForm()" x-ref="form" @submit.prevent="subscribe" class="newsletter-form">
                    <div class="newsletter-form">
                        <input
                            type="email"
                            autocomplete="on"
                            class="newsletter-input"
                            id="email"
                            placeholder="{{ trans('storefront::layouts.email_address') }}"
                            @input="subscribed = false"
                            x-model="email"
                        />

                        <button
                            type="submit"
                            class="newsletter-submit"
                            :class="{ 'btn-loading': subscribing }"
                            :disabled="subscribing"
                        >
                            <span
                                x-text="
                                    subscribed ?
                                    '{{ trans('storefront::layouts.subscribed') }}' :
                                    '{{ trans('storefront::layouts.subscribe') }}'
                                "
                            >
                                {{ trans('storefront::layouts.subscribe') }}
                            </span>
                        </button>
                    </div>
                </form>

                <script>
                function newsletterForm() {
                    return {
                        email: '',
                        subscribing: false,
                        subscribed: false,

                        async subscribe() {
                            this.subscribing = true;

                            // Optional: Simple email validation
                            if (!this.email.includes('@')) {
                                alert('Please enter a valid email address.');
                                this.subscribing = false;
                                return;
                            }

                            // Simulate Ajax subscription or integrate actual logic
                            try {
                                await axios.post('/subscribers', { email: this.email });
                                console.log('Subscribed with:', this.email);

                                this.subscribed = true;
                                this.email = '';
                            } catch (e) {
                                alert('Subscription failed.');
                            } finally {
                                this.subscribing = false;
                            }
                        }
                    }
                }
                </script>
            </div>
        </div>
    </section>
@endif