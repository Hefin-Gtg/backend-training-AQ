<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;

class ListCategoriesController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}

