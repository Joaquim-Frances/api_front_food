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
    }
}
