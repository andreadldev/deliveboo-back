<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $categories = ['Americano' ,
        'Asiatico' ,
        'Burrito' ,
        'Caffetteria' ,
        'Cinese' ,
        'Coreano',
        'Dolci e dessert',
        'Gelato' ,
        'Giapponese' ,
        'Hamburger' ,
        'Healthy' ,
        'Indiano',
        'Insalate' ,
        'Italiano' ,
        'Kebab' ,
        'Mediterraneo',
        'Messicano',
        'Pasta' ,
        'Piadina',
        'Pizza' ,
        'Poke',
        'Street food',
        'Sushi' ,
        'Thailandese'];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name);
            $newCategory->save();
        }
    }
}
