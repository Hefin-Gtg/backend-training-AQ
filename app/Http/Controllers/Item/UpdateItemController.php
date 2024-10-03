<?php

namespace App\Http\Controllers\Item;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Controllers\Controller;

class UpdateItemController extends Controller
{
    public function __invoke(StoreItemRequest $request, Item $item)
    {
        $item->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock_quantity' => $request->input('stock_quantity'),
            'image_url' => $request->input('image_url'),
        ]);

        return redirect()->route('items.index');
    }
}

