<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::factory(1)->create([
            'name'=> 'Rashagulla',
            'description'=> 'The mos liquid food from Philadelphia Stations',
            'price'=>27,
            'image'=>'url',
        ]);

        Dish::factory(1)->create([
            'name'=> 'Patates Fregides',
            'description'=> 'Incredible flavor of fried french potatoes',
            'price'=>18,
            'image'=>'url',
        ]);

        Dish::factory(1)->create([
            'name'=> 'Salad',
            'description'=> 'Incredible Big Ass Salad, full of life.',
            'price'=>40,
            'image'=>'url',
        ]);

        Dish::factory(1)->create([
            'name'=> 'Spaghetti',
            'description'=> 'Try our special Italian dish, with our incredible sausage.',
            'price'=>30,
            'image'=>'url',
        ]);
    }
}
