<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('categories.create');
    }
}

