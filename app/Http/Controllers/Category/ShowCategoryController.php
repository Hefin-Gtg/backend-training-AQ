<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;

class ShowCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('categories.show', compact('category'));
    }
}

