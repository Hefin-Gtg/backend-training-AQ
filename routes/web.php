<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Item\ListItemsController;
use App\Http\Controllers\Item\CreateItemController;
use App\Http\Controllers\Item\StoreItemController;
use App\Http\Controllers\Item\ShowItemController;
use App\Http\Controllers\Item\EditItemController;
use App\Http\Controllers\Item\UpdateItemController;
use App\Http\Controllers\Item\DestroyItemController;

use App\Http\Controllers\Category\ListCategoriesController;
use App\Http\Controllers\Category\CreateCategoryController;
use App\Http\Controllers\Category\StoreCategoryController;
use App\Http\Controllers\Category\ShowCategoryController;
use App\Http\Controllers\Category\EditCategoryController;
use App\Http\Controllers\Category\UpdateCategoryController;
use App\Http\Controllers\Category\DestroyCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Routes for Items
    Route::get('/items', ListItemsController::class)->name('items.index');
    Route::get('/items/create', CreateItemController::class)->name('items.create');
    Route::post('/items', StoreItemController::class)->name('items.store');
    Route::get('/items/{item}', ShowItemController::class)->name('items.show');
    Route::get('/items/{item}/edit', EditItemController::class)->name('items.edit');
    Route::put('/items/{item}', UpdateItemController::class)->name('items.update');
    Route::delete('/items/{item}', DestroyItemController::class)->name('items.destroy');

    // Routes for Categories
    Route::get('/categories', ListCategoriesController::class)->name('categories.index');
    Route::get('/categories/create', CreateCategoryController::class)->name('categories.create');
    Route::post('/categories', StoreCategoryController::class)->name('categories.store');
    Route::get('/categories/{category}', ShowCategoryController::class)->name('categories.show');
    Route::get('/categories/{category}/edit', EditCategoryController::class)->name('categories.edit');
    Route::put('/categories/{category}', UpdateCategoryController::class)->name('categories.update');
    Route::delete('/categories/{category}', DestroyCategoryController::class)->name('categories.destroy');
    });

require __DIR__.'/auth.php';
