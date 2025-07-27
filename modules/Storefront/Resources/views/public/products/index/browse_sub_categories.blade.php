@foreach ($subCategories as $subCategory)
    <div x-data="{ open: false }">
        <a
            href="{{ route('categories.products.index', ['category' => $subCategory->slug]) }}"
            class="category-item"
            :class="{ 'active': queryParams.category === '{{ $subCategory->slug }}' }"
            @click.prevent="
                changeCategory({
                    name: '{{ addslashes($subCategory->name) }}',
                    banner: {{ $subCategory->banner }},
                    slug: '{{ $subCategory->slug }}'
                });
                @if ($subCategory->items->isNotEmpty())
                    open = !open;
                @endif
            "
        >
            {{ $subCategory->name }}

            @if ($subCategory->items->isNotEmpty())
                <span class="chevron" :class="{ 'rotate': open }"></span>
            @endif
        </a>

        @if ($subCategory->items->isNotEmpty())
            <div class="sub-categories" x-show="open" x-transition>
                @include('storefront::public.products.index.browse_sub_categories', ['subCategories' => $subCategory->items])
            </div>
        @endif
    </div>
@endforeach