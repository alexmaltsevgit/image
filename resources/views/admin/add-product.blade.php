@extends('admin.layouts.app')

@section('content')
    <h2 class="text-5xl mb-12">Добавить продукт</h2>

    <form action="{{ route('admin.add-product')  }}" method="POST" class="w-3/4" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block mb-2">Название</label>
            <input type="text" name="name" class="border w-full p-1">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Категория</label>
            <select name="category" class="border w-full p-1">
                @foreach($categories as $category)
                    <option value="{{ $category['name'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Описание</label>
            <textarea name="description" class="w-full"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Цена (в рублях)</label>
            <input type="number" name="price" class="border w-full p-1">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Изображения</label>
            <input type="file" name="image[]" multiple class="border w-full p-1">
        </div>

        <button class="bg-gray-700 hover:bg-gray-800 text-white w-full p-2">Добавить</button>
    </form>
@endsection
