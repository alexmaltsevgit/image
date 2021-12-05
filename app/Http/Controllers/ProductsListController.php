<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductsListController extends Controller
{
    public function create(Request $request, int $category_id)
    {
        $category = Category::where('id', $category_id)->first();
        if (!$category)
            return redirect('/');

        $products = $category->products;

        $categories = Category::all();

        return view('products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
