<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\DishController;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        $dishes = Dish::where('restaurant_id', $restaurant->id)->get();
        // $dishes = Dish::all();
        $categories = Category::all();
        $category_pivot = DB::table('category_restaurant')->get();
        $orders = Order::all();
        $order_pivot = DB::table('dish_order')->get();
        return view('admin.dashboard', compact('dishes', 'user', 'restaurant', 'categories', 'orders'), ['category_pivot' => $category_pivot,'order_pivot' => $order_pivot]);
    })->name('dashboard');
    Route::get('/restaurants/create', function () {
        return view('admin.restaurants.create');
    })->name('restaurants.create');
    Route::resource('restaurants', RestaurantController::class)->parameters(['restaurants' => 'restaurant:slug']);
    Route::resource('dishes', DishController::class)->parameters(['dishes' => 'dish:slug']);
});

require __DIR__.'/auth.php';
