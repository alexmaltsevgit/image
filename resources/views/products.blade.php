<x-app-layout>
    <header class="px-20 py-4 bg-gray-200 shadow max-h-full">
        <x-navigation :categories="$categories" />
    </header>

    <main class="py-16 bg-white shadow grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @if(empty($products->toArray()))
            <h1 class="text-6xl text-center">Нет товаров в категории</h1>
        @else
            @foreach($products as $product)
                <div class="w-full flex flex-col items-center justify-center mb-20 text-center px-12">
                    <div class="swiper product-gallery w-full">
                        <div class="swiper-wrapper">
                            @foreach($product['images'] as $image)
                                <div class="swiper-slide">
                                    <div class="max-w-full flex items-center h-full">
                                        <img loading="lazy" src="{{ \Illuminate\Support\Facades\Storage::url($image['path']) }}" class="w-full object-contain" alt="Изображение товара">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <h3 class="text-4xl mb-6 mt-6">{{ $product['name'] }}</h3>

                    <p class="mb-6">{{ $product['description'] }}</p>

                    <div class="text-2xl bold">{{ $product['price'] }} ₽</div>
                </div>
            @endforeach
        @endif
    </main>
</x-app-layout>
