<?php

namespace App\Http\Controllers\Item;

use App\Models\Category;
use App\Http\Requests\StoreItemRequest;
use App\Http\Controllers\Controller;

class StoreItemController extends Controller
{
    public function __invoke(StoreItemRequest $request)
    {
        $category = Category::find($request->input('category_id'));

        $category->items()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('items.index');
    }
}

