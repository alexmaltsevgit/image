<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function create()
    {
        $categories = Category::query()->get('name');

        return view('admin.add-product', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $category = Category::query()->where('name', $request->input('category'))->first();

        $product->category_id = $category->id;
        $product->save();

        $images = $request->image;

        foreach ($images as $image) {
            $imageName = uniqid(time()) . ".jpg";
            $path = $image->storeAs('images', $imageName, 'public');

            ProductImage::query()->create([
                'path' => $path,
                'product_id' => $product->id,
            ]);
        }

        return redirect(route('admin.add-product'));
    }
}
