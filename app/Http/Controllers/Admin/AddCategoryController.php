<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function create()
    {
        return view('admin.add-category');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->save();

        return redirect(route('admin.add-category'));
    }
}
