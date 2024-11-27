<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Image;
use App\Services\ApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('image')->get();

        return api()->success(CategoryResource::collection($categories));
    }


    public function store(Request $request)
    {

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'visibility' => true,
        ]);

        $getImage = $request->file('image')->store('storage/categories');
        $category->image()->create(['path' => $getImage]);
        return api()->created();
    }


}

if (!function_exists('api')) {

    function api()
    {
        return new ApiResponse();
    }
}