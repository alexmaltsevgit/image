<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="space-x-8 flex">
                    <x-nav-link :href="route('admin.add-product')" :active="request()->routeIs('admin.add-product')">
                        {{ __('Добавить продукт') }}
                    </x-nav-link>

                    <x-nav-link :href="route('admin.add-category')" :active="request()->routeIs('admin.add-category')">
                        {{ __('Добавить категорию') }}
                    </x-nav-link>
                </div>
            </div>


            <form method="POST" action="{{ route('admin.logout') }}" class="flex items-center">
                @csrf

                <x-dropdown-link :href="route('admin.logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Выйти') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
</nav>
