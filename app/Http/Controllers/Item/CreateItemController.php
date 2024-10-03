<?php

namespace App\Http\Controllers\Item;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateItemController extends Controller
{
    public function __invoke()
    {
        $categories = Category::listOfOptions();
        return view('items.create', compact('categories'));
    }
}

