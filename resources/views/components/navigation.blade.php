@props(['categories'])

<nav class="swiper" id="navigation">
    <ul class="swiper-wrapper py-4">
        @foreach($categories as $category)
            <li class="swiper-slide w-auto">
                <a href="{{ '/' . $category->id }}" class="text-3xl hover:text-gray-600 transition-colors">
                    {{ __($category->name) }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
