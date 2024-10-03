<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;

class DestroyCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
