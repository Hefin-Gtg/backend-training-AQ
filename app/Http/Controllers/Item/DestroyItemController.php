<?php

namespace App\Http\Controllers\Item;

use App\Models\Item;
use App\Http\Controllers\Controller;

class DestroyItemController extends Controller
{
    public function __invoke(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}

