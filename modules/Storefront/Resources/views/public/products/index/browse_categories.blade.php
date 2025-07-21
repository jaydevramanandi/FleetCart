<ul class="list-inline browse-categories">
    @foreach ($categories as $category)
        <li :class="{ active: queryParams.category === '{{ $category->slug ?? '' }}' }">
            @if (!empty($category->items))
                <i
                    class="las la-angle-right"
                    @click="
                        $($el).toggleClass('open');
                        $($el).siblings('ul').slideToggle(200);
                    "
                >
                </i>
            @endif
            
            <a
                href="{{ route('categories.products.index', ['category' => $category->slug ?? 0]) }}"
                @click.prevent='
                    changeCategory({
                        name: "{{ addslashes($category->name) }}",
                        banner: {{ $category->banner }},
                        slug: "{{ $category->slug }}"
                    })
                '
            >
                {{ $category->name }}
            </a>

            @if (!empty($category->items))
                @include('storefront::public.products.index.browse_sub_categories', ['subCategories' => $category->items])
            @endif
        </li>
    @endforeach
</ul>
