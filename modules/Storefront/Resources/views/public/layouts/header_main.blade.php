<div class="main-header">
    <div class="container">
        <div class="logo">
            <div class="logo-icon">
                @if (is_null($logo))
                    <h3>{{ setting('store_name') }}</h3>
                @else
                    <img src="{{ $logo }}" alt="{{ setting('store_name') ?? 'Logo' }}" width='100%'>
                @endif
                <!-- <img src='{{ asset('build/assets/images/logo.svg') }}' width='100%'> -->
            </div>
            
        </div>
        
        @include('storefront::public.layouts.header.header_search')

        {{--
        <div class="cart-container">
            <div class="cart-icon"><svg width="38" height="43" viewBox="0 0 38 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7042 35.8778C15.873 35.8778 16.8216 36.8264 16.8216 37.9952C16.8216 39.164 15.873 40.1126 14.7042 40.1126C13.5354 40.1126 12.5868 39.164 12.5868 37.9952C12.5868 36.8264 13.5354 35.8778 14.7042 35.8778ZM10.4694 37.9952C10.4694 40.3338 12.3655 42.23 14.7042 42.23C17.0429 42.23 18.939 40.3338 18.939 37.9952C18.939 35.6565 17.0429 33.7604 14.7042 33.7604C12.3655 33.7604 10.4694 35.6565 10.4694 37.9952ZM12.5868 31.643C11.418 31.643 10.4694 30.6944 10.4694 29.5256C10.4694 29.5256 34.8195 27.4081 34.7898 27.5108C35.3298 25.5025 37.9734 13.8812 37.9956 13.6451C38.0528 13.0628 37.5223 12.5864 36.9369 12.5864H10.4694V10.469H11.5281C12.1135 10.469 12.5868 9.99572 12.5868 9.41026C12.5868 8.82586 12.1135 8.35156 11.5281 8.35156H5.17589C4.59043 8.35156 4.11719 8.82586 4.11719 9.41026C4.11719 9.99572 4.59043 10.469 5.17589 10.469H8.35199V29.5256C8.35199 31.8642 10.2481 33.7604 12.5868 33.7604H36.9369C36.9697 33.7604 36.9369 32.7112 36.9369 31.643H12.5868ZM27.4086 35.8778C28.5774 35.8778 29.526 36.8264 29.526 37.9952C29.526 39.164 28.5774 40.1126 27.4086 40.1126C26.2398 40.1126 25.2912 39.164 25.2912 37.9952C25.2912 36.8264 26.2398 35.8778 27.4086 35.8778ZM23.1738 37.9952C23.1738 40.3338 25.0699 42.23 27.4086 42.23C29.7473 42.23 31.6434 40.3338 31.6434 37.9952C31.6434 35.6565 29.7473 33.7604 27.4086 33.7604C25.0699 33.7604 23.1738 35.6565 23.1738 37.9952Z" fill="black"/>
                <rect width="17" height="17" rx="8.5" fill="#CA0000"/>
                <path d="M8.594 13.156C8.094 13.156 7.646 13.044 7.25 12.82C6.854 12.592 6.514 12.278 6.23 11.878C5.946 11.478 5.73 11.016 5.582 10.492C5.434 9.964 5.36 9.4 5.36 8.8C5.36 8.2 5.434 7.636 5.582 7.108C5.73 6.58 5.946 6.118 6.23 5.722C6.514 5.322 6.854 5.01 7.25 4.786C7.646 4.558 8.094 4.444 8.594 4.444C9.09 4.444 9.536 4.558 9.932 4.786C10.332 5.01 10.67 5.322 10.946 5.722C11.226 6.118 11.44 6.58 11.588 7.108C11.74 7.636 11.816 8.2 11.816 8.8C11.816 9.4 11.74 9.964 11.588 10.492C11.44 11.016 11.226 11.478 10.946 11.878C10.67 12.278 10.332 12.592 9.932 12.82C9.536 13.044 9.09 13.156 8.594 13.156ZM8.594 12.148C9.094 12.148 9.512 11.994 9.848 11.686C10.188 11.374 10.442 10.964 10.61 10.456C10.778 9.948 10.862 9.396 10.862 8.8C10.862 8.172 10.774 7.606 10.598 7.102C10.426 6.594 10.17 6.192 9.83 5.896C9.494 5.6 9.082 5.452 8.594 5.452C8.21 5.452 7.874 5.542 7.586 5.722C7.302 5.902 7.066 6.148 6.878 6.46C6.69 6.772 6.548 7.13 6.452 7.534C6.36 7.934 6.314 8.356 6.314 8.8C6.314 9.396 6.4 9.95 6.572 10.462C6.744 10.97 6.998 11.378 7.334 11.686C7.674 11.994 8.094 12.148 8.594 12.148Z" fill="#F7FAFC"/>
                </svg>
                </div>
            <!-- <span class="cart-count">0</span> -->
        </div>
        --}}

        <div class="header-column-right d-flex">
            <div class="header-column-right-item header-localization">
                <div class="icon-wrap" @click="$store.layout.openLocalizationMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.99998 3H8.99998C7.04998 8.84 7.04998 15.16 8.99998 21H7.99998" stroke="#292D32" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#292D32" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#292D32" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M3 8.99998C8.84 7.04998 15.16 7.04998 21 8.99998" stroke="#292D32" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>

            <a href="{{ route('compare.index') }}" class="header-column-right-item header-compare">
                <div class="icon-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3.58008 5.15991H17.4201C19.0801 5.15991 20.4201 6.49991 20.4201 8.15991V11.4799" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.74008 2L3.58008 5.15997L6.74008 8.32001" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.4201 18.84H6.58008C4.92008 18.84 3.58008 17.5 3.58008 15.84V12.52" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.26 21.9999L20.42 18.84L17.26 15.6799" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                      
                    
                    <div class="count" x-text="$store.compare.count">{{ $compareCount }}</div>
                </div>
            </a>

            <a href="{{ route('account.wishlist.index') }}" class="header-column-right-item header-wishlist">
                <div class="icon-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                      
                    
                    <div class="count" x-text="$store.wishlist.count">{{ $wishlistCount }}</div>
                </div>
            </a>
            
            <a
                href="{{ route('cart.index') }}"
                class="header-column-right-item header-cart"
                @click="$store.layout.openSidebarCart($event)"
            >  
                <div class="icon-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.00001 22H15C19.02 22 19.74 20.39 19.95 18.43L20.7 12.43C20.97 9.99 20.27 8 16 8H8.00001C3.73001 8 3.03001 9.99 3.30001 12.43L4.05001 18.43C4.26001 20.39 4.98001 22 9.00001 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <div class="count" x-text="$store.cart.quantity">{{ $cartQuantity }}</div>
                </div>
            </a>
        </div>
        
    </div>
</div>