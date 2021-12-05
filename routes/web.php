<?php

use App\Http\Controllers\ProductsListController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $first_category = Category::query()->first();
    return redirect("/category/$first_category->id");
});

Route::get('/category/{category_id}', [ProductsListController::class, 'create'])
    ->name('products-list');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

require __DIR__ . '/admin.php';
