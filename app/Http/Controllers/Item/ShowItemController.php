<?php

namespace App\Http\Controllers\Item;

use App\Models\Item;
use App\Http\Controllers\Controller;

class ShowItemController extends Controller
{
    public function __invoke(Item $item)
    {
        return view('items.show', compact('item'));
    }
}
