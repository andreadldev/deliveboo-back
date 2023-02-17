<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Database\Seeders\CategorySeeder;
use Faker\Generator as Faker;
class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //1
        $dish_1 = new Dish();

            $categories = CategorySeeder::class;
            $dish_1->name='Spaghetti alla Carbonara';

            $dish_1->slug = Str::slug($dish_1->name);
            $dish_1->img = null;
            $dish_1->restaurant_id=1;
            // $slug_base = $slug;
            // $existingslug = Dish::where('slug', $slug)->first();
            // $counter = 1;
            // while ($existingslug) {
            //     $slug = $slug_base . '_' . $counter;
            //     $existingslug = Dish ::where('slug', $slug)->first();
            //     $counter++;
            // }
            // $dish1->slug = $slug;

            $dish_1->description='Piatto buono e tipico italiano';
            $dish_1->price=8.50;
            $dish_1->ingredients='Uova , guanciale , pecorino';
            $dish_1->visible=$faker->boolean();
            

            // $dish_1->restaurant_id=Restaurant::where('category', $category);
            $dish_1->save();
        
    }
    }
