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
        // Ristorante 1, Americano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 1;
        $newRestaurant->name = 'White Backery';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza del Sacro Cuore, 22, 65122 Pescara PE';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(9);
        $newRestaurant->categories()->attach(11);




        // Ristorante 2, Asiatico
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bambu';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Il ristorante Bambu offre un ambiente accogliente, atmosfera casalinga per aiutarvi a gustare la cena in peino relax... Abbiamo messo insieme una squadra di professionisti, i quali aspirano a eccellere costantemente!';
        $newRestaurant->img = 'https://www.scattidigusto.it/wp-content/uploads/2018/01/Kowa-nuovo-ristorante-giapponese-cinese-Milano.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);


        // Ristorante 3, Healthy
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 3;
        $newRestaurant->name = 'Zumos Juicebar & healthy food';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Boncompagni, 14/D';
        $newRestaurant->description = 'Il primo Healthy Fast Food a Roma, dove mangiare sano e bere frullati con frutta tropicale è possibile';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1a/ee/a3/b9/don-t-worry-be-healthy.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(6);


        // Ristorante 4, Indiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 4;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 5, Italiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 6, Mediterraneo
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 7, Messicano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 8, Poke
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 9, FastFood
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 10, Sushi
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);


        // Ristorante 11, Dolci
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'Bamboo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
    }
}
