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

        $orders = Order::whereHas('dishes', function ($query) use ($restaurant) {
            $query->where('restaurant_id', $restaurant->id);
        })->with('dishes')->orderByDesc('id')->get();

        // $prova = DB::select('SELECT * FROM dishes LEFT JOIN dish_order ON dishes.id = dish_order.dish_id WHERE dishes.restaurant_id='.$restaurant->id);
        // $client_dishes = Dish::join('dish_order', 'dishes.id', '=', 'dish_order.dish_id')
        //                ->select('dishes.name','dish_order.order_id')->where('restaurant_id', $restaurant->id)
        //                ->get();
        $groupedOrders = $orders->map(function($order) {
            $dishes = $order->dishes->groupBy('id')->map(function($dishGroup) {
                return [
                    'id' => $dishGroup->first()->id,
                    'name' => $dishGroup->first()->name,
                    'price' => $dishGroup->first()->price,
                ];
            });

            return [
                'id' => $order->id,
                'firstname' => $order->firstname,
                'lastname' => $order->lastname,
                'code' => $order->code,
                'address' => $order->address,
                'price' => $order->price,
                'order_date' => $order->order_date,
                'email' => $order->email,
                'dishes' => $dishes
            ];
        });

        return view('admin.dashboard', compact('dishes', 'user', 'restaurant', 'categories', 'orders', 'groupedOrders'), ['category_pivot' => $category_pivot]);
    })->name('dashboard');

    Route::get('/restaurants/create', function () {
        return view('admin.restaurants.create');
    })->name('restaurants.create');
    
    Route::resource('restaurants', RestaurantController::class)->parameters(['restaurants' => 'restaurant:slug']);
    Route::resource('dishes', DishController::class)->parameters(['dishes' => 'dish:slug']);
});

require __DIR__.'/auth.php';
