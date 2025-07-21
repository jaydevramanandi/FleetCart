<section class="categories">
    <div class="container">
        <h2 class="section-title">Categories</h2>
        <div class="categories-grid">
            
            @if (!empty($categories))

                @foreach ($categories as $category)

                    <div class="category-item">
                        <div class="category-card">
                            <div class="category-image">
                                @php
                                    $logoPath = $category->logo->path ?? null;
                                    $logoUrl = $logoPath
                                        ? (\Illuminate\Support\Str::startsWith($logoPath, ['http://', 'https://'])
                                            ? $logoPath
                                            : asset('storage/' . $logoPath))
                                        : asset('build/assets/images/image.png');
                                @endphp

                                <img class="category-image-img" src="{{ $logoUrl }}" alt="{{ $category->name }}">
                            </div>
                        </div>
                        <h3 class="category-title">{{ $category->name }}</h3>
                    </div>

                @endforeach

            @endif
            
        </div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <h2 class="section-title">New Arrivals</h2>
        <div class="categories-grid">
        
        @if (!empty($subCategories))

            @foreach ($subCategories as $subCategory)

                <div class="category-item">
                    <div class="category-card">
                        <div class="category-image">
                            @php
                                $logoPath = $subCategory->logo->path ?? null;
                                $logoUrl = $logoPath
                                    ? (\Illuminate\Support\Str::startsWith($logoPath, ['http://', 'https://'])
                                        ? $logoPath
                                        : asset('storage/' . $logoPath))
                                    : asset('build/assets/images/image.png');
                            @endphp

                            <img class="category-image-img" src="{{ $logoUrl }}" alt="{{ $subCategory->name }}">
                        </div>
                    </div>
                    <h3 class="category-title">{{ $subCategory->name }}</h3>
                </div>

            @endforeach

        @endif
        
        </div>
    </div>
</section>