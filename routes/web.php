<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\OrderController;
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

        $previous_url = substr(url()->previous(), strpos(url()->previous(), "admin"));

        if($restaurant == NULL && $previous_url == 'admin/restaurants/create') {
            return redirect()->back();
        } else if ($restaurant == NULL) {
            return redirect('/admin/restaurants/create');
        };
        
        $categories = Category::all();

        $category_pivot = DB::table('category_restaurant')->get();

        // $user = Auth::user();
        // $restaurant = Restaurant::where('user_id', $user->id)->first();
        
        // $dishes = Dish::where('restaurant_id', $restaurant->id)->with('orders')->get();

        // $orders = Order::whereHas('dishes', function ($query) use ($restaurant) {
        //     $query->where('dishes.restaurant_id', $restaurant->id);
        // })->with('dishes')->get();

        // $quantities = DB::table('dish_order')->where('order_id', $orders->id)->get();
        
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        // $dishes = Dish::where('user_id', Auth::user()->id)->orderBy('name', 'asc')->get();

        //recupero user
        // $orders = Order::where('user_id', Auth::user()->id)->with('dishes')->orderBy('created_at', 'desc')->get();

        $dishes = Dish::where('restaurant_id', $restaurant->id)->with(['orders' => function($query) {
            $query->withPivot('quantity');
        }])->get();

        $orders = Order::whereHas('dishes', function ($query) use ($restaurant) {
            $query->where('dishes.restaurant_id', $restaurant->id);
        })->with('dishes')->get();

        // $quantities = collect(); // initialize an empty collection

        // foreach ($orders as $order) {
        //     $pivotData = $order->dishes->pluck('pivot')->toArray();
        //     $quantities = $quantities->merge($pivotData);
// }


        return view('admin.dashboard', compact( 'user', 'restaurant', 'categories','dishes', 'orders'), ['category_pivot' => $category_pivot]);
    })->name('dashboard');

    Route::get('/restaurants/create', function () {
        return view('admin.restaurants.create');
    })->name('restaurants.create');

    
    
    Route::resource('restaurants', RestaurantController::class)->parameters(['restaurants' => 'restaurant:slug']);
    Route::resource('dishes', DishController::class)->parameters(['dishes' => 'dish:slug']);

});

require __DIR__.'/auth.php';
