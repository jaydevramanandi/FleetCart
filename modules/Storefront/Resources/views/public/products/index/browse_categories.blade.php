@foreach ($categories as $category)
    <div x-data="{ open: false }">
        <a
            href="{{ route('categories.products.index', ['category' => $category->slug ?? 0]) }}"
            class="category-item"
            :class="{ 'active': queryParams.category === '{{ $category->slug ?? '' }}' }"
            @click.prevent="
                changeCategory({
                    name: '{{ addslashes($category->name) }}',
                    banner: {{ $category->banner }},
                    slug: '{{ $category->slug }}'
                });
                @if (!empty($category->items))
                    open = !open;
                @endif
            "
        >
            {{ $category->name }}

            @if (!empty($category->items))
                <span class="chevron" :class="{ 'rotate': open }"></span>
            @endif
        </a>

        @if (!empty($category->items))
            <div class="sub-categories" x-show="open" x-transition>
                @include('storefront::public.products.index.browse_sub_categories', ['subCategories' => $category->items])
            </div>
        @endif
    </div>
@endforeach