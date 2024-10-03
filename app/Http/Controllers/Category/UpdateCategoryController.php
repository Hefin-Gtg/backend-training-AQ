<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\Controller;

class UpdateCategoryController extends Controller
{
    public function __invoke(StoreCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('categories.index');
    }
}
