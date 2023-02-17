<?php

namespace Database\Seeders;

use App\Http\Controllers\Auth\NewPasswordController;
use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $newOrder = new Order();
            $newOrder->firstname = $faker->firstName();
            $newOrder->lastname = $faker->lastname();
            $newOrder->address = $faker->Address();
            $name = $newOrder->firstname;
            $surname = $newOrder->lastname;
            $newOrder->email = strtolower($name . $surname) . '@' . $faker->safeEmailDomain;
            $newOrder->phone_number = $faker->phoneNumber();
            $newOrder->order_date = $faker->dateTimeBetween('-2 hours', 'Now');
            // $faker->randomFloat(2, 20, 30)
            $newOrder->price = $faker->randomFloat(2, 1, 999);
            $newOrder->additional_info = $faker->sentence();
            if (mt_rand(1, 10) <= 3) {
                $newOrder->additional_info = null;
            }
            $newOrder->quantity = rand(0,10);

            // $order->total_price = $faker->randomFloat(2, 1, 999);
            // $order->date_order = $faker->date();
            // $order->address_client = $faker->streetAddress();  //email creata con regex
            // $order->email_client = preg_replace('/@example..*/', '@domain.com', $faker->unique()->safeEmail);
            $newOrder->save();


        }
    }
}
