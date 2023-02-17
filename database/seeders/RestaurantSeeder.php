<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\it_IT\Company;



class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Ristorante 1, americano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id=1;
        $newRestaurant->name='White Backery';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address='Piazza del Sacro Cuore, 22, 65122 Pescara PE';
        $newRestaurant->description='Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img='https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat=$faker->vat(); // da vedere bene 
        $newRestaurant->opening_time= '07:00:00';
        $newRestaurant->closing_time='22:30:00';
        $newRestaurant->phone_number=$faker->phoneNumber();
        $newRestaurant->price_shipping=$faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
     
        



       

    
    }
}
