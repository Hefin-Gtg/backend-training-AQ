<?php

namespace App\Http\Controllers\Item;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListItemsController extends Controller
{
    public function __invoke()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }
}

