@extends('admin.layouts.app')

@section('content')
    <h2 class="text-5xl mb-12">Добавить категорию</h2>

    <form action="{{ route('admin.add-category')  }}" method="POST" class="w-64">
        @csrf

        <div class="mb-4">
            <label class="block mb-2">Название</label>
            <input type="text" name="name" class="border w-full p-1">
        </div>

        <button class="bg-gray-700 hover:bg-gray-800 text-white w-full p-2">Добавить</button>
    </form>
@endsection

