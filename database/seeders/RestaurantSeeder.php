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

        // $newRestaurant = new Restaurant;
        // $newRestaurant->user_id = 13;
        // $newRestaurant->name = "Hamerica's America";
        // $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        // $newRestaurant->address = 'Via Candia, 1';
        // $newRestaurant->description = "Vivace catena ispirata al rock'n roll che serve hamburger e piatti tipici americani.";
        // $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/11/5a/c0/04/diner-americano-in-stile.jpg';
        // $newRestaurant->vat = $faker->vat();
        // $newRestaurant->opening_time = '18:00:00';
        // $newRestaurant->closing_time = '23:30:00';
        // $newRestaurant->phone_number = $faker->phoneNumber();
        // $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        // $newRestaurant->save();
        // $newRestaurant->categories()->attach(1);
        // $newRestaurant->categories()->attach(9);
        // $newRestaurant->categories()->attach(11);

        // $newRestaurant = new Restaurant;
        // $newRestaurant->user_id = 1;
        // $newRestaurant->name = 'White Backery';
        // $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        // $newRestaurant->address = 'Piazza del Sacro Cuore, 22, 65122 Pescara PE';
        // $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        // $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        // $newRestaurant->vat = $faker->vat();
        // $newRestaurant->opening_time = '07:00:00';
        // $newRestaurant->closing_time = '22:30:00';
        // $newRestaurant->phone_number = $faker->phoneNumber();
        // $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        // $newRestaurant->save();
        // $newRestaurant->categories()->attach(1);
        // $newRestaurant->categories()->attach(9);
        // $newRestaurant->categories()->attach(11);




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
        $newRestaurant->name = 'JALALABAD cucina Indiana e Araba';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Corso Vittorio Emanuele II, 18';
        $newRestaurant->description = 'Curry di carne e vegani, oltre a biryani e piatti tandoori, in un ristorante a tinte vivaci con arredi tradizionali.';
        $newRestaurant->img = 'https://www.festadilaurearoma.org/wp-content/uploads/2020/07/c700x420.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '23:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(4);
        $newRestaurant->categories()->attach(11);



        // Ristorante 5, Italiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 5;
        $newRestaurant->name = 'Ristorante Il Falchetto';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via dei Montecatini, 12';
        $newRestaurant->description = 'Piatti romani come cacio e pepe e ossobuco, oltre a una corposa carta di vini, in un ristorante elegante.';
        $newRestaurant->img = 'https://wips.plug.it/cips/initalia.virgilio.it/cms/2019/10/spaghetti.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);



        // Ristorante 6, Mediterraneo
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 6;
        $newRestaurant->name = 'Ristorante Mediterraneo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Anagni, 52/54';
        $newRestaurant->description = 'Acclamato ristorante del museo con giardino e sushi bar che offre dolci e piatti mediterranei.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/10234bfb-f7dd-48f5-8eb6-f0c8a7d7765c/76c6e8ae-4ba4-413a-add5-d3c071276c27.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '12:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);


        // Ristorante 7, Messicano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 7;
        $newRestaurant->name = 'La Cucaracha';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Mocenigo, 10';
        $newRestaurant->description = 'Tacos, quesadillas e fajitas, oltre a cocktail a base di tequila, in un locale accogliente con colorati murales messicani.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/10/bd/7d/bb/fajitas-de-pollo-chiken.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(7);
        $newRestaurant->categories()->attach(11);


        // Ristorante 8, Poke
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 8;
        $newRestaurant->name = 'Gusto Poke';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Viale Leonardo da Vinci, 264';
        $newRestaurant->description = 'Elegante wine bar in stile industrial chic, con mattoni a vista, ampie vetrate e menù su lavagna.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1b/f8/2b/2d/variedad-de-poke-bowls.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);





        // Ristorante 9, FastFood
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 9;
        $newRestaurant->name = 'Birretta wine and food - Hamburger';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Leopoldo Nobili, 36';
        $newRestaurant->description = 'Burger bar in stile industrial-chic che serve piatti vegani, carne e pollo locali accompagnati da birre artigianali.';
        $newRestaurant->img = 'http://www.studioristorante.com/wp-content/uploads/2017/07/5630be0a8fc825d5ac1c5575.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(9);
        $newRestaurant->categories()->attach(11);



        // Ristorante 10, Sushi
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 10;
        $newRestaurant->name = 'Neko Sushi Monteverde';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazzale Eugenio Morelli, 14';
        $newRestaurant->description = 'Riso alla cantonese e sushi, anche nella formula all you can eat, in ristorante con arredi scuri essenziali.';
        $newRestaurant->img = 'https://www.cosafarearoma.it/wp-content/uploads/2018/10/Migliore-Sushi-a-Roma-Ristoranti-Giapponesi.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);


        // Ristorante 11, Dolci
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 11;
        $newRestaurant->name = 'I Dolci Di Checco Er Carettiere';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Benedetta, 7';
        $newRestaurant->description = 'Elegante caffè/bar per colazione e pranzi leggeri, oltre a caffè, dolci artigianali e gelati.';
        $newRestaurant->img = 'https://www.bajaroma.it/wp-content/uploads/2020/04/Baja-Ristorante-Dolce.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '06:00:00';
        $newRestaurant->closing_time = '15:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(2, 1, 4);
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);
    }
}
