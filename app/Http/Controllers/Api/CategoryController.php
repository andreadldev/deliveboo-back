<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }

    public function show($slug) {
        try {
            return Category::where('slug', $slug)
                ->whereHas('category_restaurant')
                ->with(['category_restaurant' => function ($query) {
                    $query->select('restaurant_id');
                }])
                ->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'error' => '404 Category not found'
            ], 404);
        }
    }

    public function getCategoryRestaurants(Category $category, $slug){
        return Category::where('slug', $slug)->with('restaurants')->get();
    }
}
