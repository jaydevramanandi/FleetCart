<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                
                <h4 class="footer-title">{{ setting('storefront_footer_menu_one_title') }}</h4>
                @if (!empty($footerMenuOne))
                    <ul class="footer-links">
                        @foreach ($footerMenuOne as $menuItem)
                            <li>
                                <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                    {{ $menuItem->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="footer-column">
                <h4 class="footer-title"><h4 class="footer-title">{{ setting('storefront_footer_menu_two_title') }}</h4></h4>
                <ul class="footer-links">
                    @foreach ($footerMenuTwo as $menuItem)
                        <li>
                            <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                {{ $menuItem->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- <div class="footer-column">
                <div class="speaker-icon">🔊</div>
            </div> -->
            <div class="footer-column">
                <h4 class="footer-title">Contact Us</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.53467 9C5.53467 5.13 8.99939 2 13.2832 2C17.5671 2 21.0318 5.13 21.0318 9C21.0318 14.25 13.2832 22 13.2832 22C13.2832 22 5.53467 14.25 5.53467 9ZM10.5159 9C10.5159 10.38 11.7557 11.5 13.2832 11.5C14.8108 11.5 16.0506 10.38 16.0506 9C16.0506 7.62 14.8108 6.5 13.2832 6.5C11.7557 6.5 10.5159 7.62 10.5159 9Z" fill="white"/>
                                </svg>
                                
                        </span>
                        <span>{{ setting('store_address_1') }}</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.43772 10.79C8.91887 13.62 11.3052 15.93 14.216 17.38L16.4789 15.18C16.7566 14.91 17.168 14.82 17.528 14.94C18.68 15.31 19.9246 15.51 21.2 15.51C21.7657 15.51 22.2286 15.96 22.2286 16.51V20C22.2286 20.55 21.7657 21 21.2 21C11.5417 21 3.71429 13.39 3.71429 4C3.71429 3.45 4.17715 3 4.74287 3H8.34287C8.90858 3 9.37144 3.45 9.37144 4C9.37144 5.25 9.57715 6.45 9.95772 7.57C10.0709 7.92 9.98858 8.31 9.70058 8.59L7.43772 10.79Z" fill="white"/>
                                </svg>
                                
                        </span>
                        <span>{{ setting('store_phone') }}</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.77144 4H21.2286C22.36 4 23.2857 4.9 23.2857 6V18C23.2857 19.1 22.36 20 21.2286 20H4.77144C3.64001 20 2.71429 19.1 2.71429 18L2.72458 6C2.72458 4.9 3.64001 4 4.77144 4ZM13 13L21.2286 8V6L13 11L4.77144 6V8L13 13Z" fill="white"/>
                            </svg>
                            </span>
                        <span>{{ setting('store_email') }}</span>
                    </div>
                </div>
            </div>
            <div class="footer-column">
                <h4 class="footer-title">Follow Us</h4>
                <div class="social-links">
                    <a href="{{ setting('storefront_twitter_link') }}" class="social-link" target="_blank"><svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.7641 6.40812C23.9453 6.76149 23.0654 6.99948 22.1419 7.10675C23.0849 6.55776 23.809 5.68786 24.1493 4.65118C23.2675 5.15961 22.2903 5.5292 21.2499 5.72842C20.4182 4.86573 19.2305 4.32666 17.9175 4.32666C14.9699 4.32666 12.804 7.00038 13.4697 9.77596C9.67648 9.59116 6.31255 7.82431 4.06036 5.13887C2.86425 7.13379 3.44005 9.74351 5.4725 11.065C4.72517 11.0416 4.02049 10.8424 3.40575 10.5097C3.35568 12.566 4.87167 14.4897 7.0673 14.9179C6.42475 15.0873 5.72099 15.127 5.00519 14.9936C5.58562 16.7568 7.27129 18.0396 9.27036 18.0757C7.35103 19.5387 4.93286 20.1923 2.51099 19.9146C4.53138 21.174 6.93193 21.9087 9.50958 21.9087C17.9861 21.9087 22.7752 14.9485 22.4859 8.70593C23.3779 8.07942 24.1521 7.29786 24.7641 6.40812Z" fill="white"/>
                        </svg>
                        </a>
                    <a href="{{ setting('storefront_facebook_link') }}" class="social-link" target="_blank"><svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3586 23.7987V15.9826H20.3549L20.8035 12.6003H17.3586V10.4409C17.3586 9.46168 17.6383 8.79435 19.0826 8.79435L20.9248 8.79357V5.76842C20.6062 5.7272 19.5127 5.63511 18.2404 5.63511C15.5845 5.63511 13.7661 7.21134 13.7661 10.106V12.6003H10.7622V15.9826H13.7661V23.7987H5.16272C3.72888 23.7987 2.56653 22.6363 2.56653 21.2025L2.56653 4.75952C2.56653 3.32568 3.72888 2.16333 5.16272 2.16333L22.2234 2.16333C23.6573 2.16333 24.8196 3.32568 24.8196 4.75952V21.2025C24.8196 22.6363 23.6573 23.7987 22.2234 23.7987H17.3586Z" fill="white"/>
                        </svg>
                        </a>
                    <a href="{{ setting('storefront_youtube_link') }}" class="social-link" target="_blank"><svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8667 0.876914C18.1211 0.40918 11.1523 0.40918 11.1523 0.40918C11.1523 0.40918 4.19735 0.40918 2.45174 0.850174C1.51708 1.10407 0.747465 1.85232 0.486309 2.77438C0.0327148 4.4715 0.0327148 7.9861 0.0327148 7.9861C0.0327148 7.9861 0.0327148 11.514 0.486309 13.1844C0.747465 14.1065 1.50334 14.8414 2.45174 15.0953C4.2111 15.5497 11.1523 15.5497 11.1523 15.5497C11.1523 15.5497 18.1211 15.5497 19.8667 15.1087C20.8151 14.8548 21.571 14.1332 21.8184 13.1978C22.2857 11.514 22.2857 7.99947 22.2857 7.99947C22.2857 7.99947 22.2994 4.4715 21.8184 2.77438C21.571 1.85232 20.8151 1.11745 19.8667 0.876914ZM8.9392 11.2195V4.7385L14.7259 7.9857L8.9392 11.2195Z" fill="white"/>
                        </svg>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>{!! $copyrightText !!}</p>
        </div>
    </div>
</footer>