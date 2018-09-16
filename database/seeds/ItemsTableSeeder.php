<?php

use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $items = ["Laser Radial", "Laser 4.7", "Laser Standart"];
        $prices = [7000, 5000, 9000];

        for ($i=0; $i<3; $i++) {
            Item::create([
                'name' => $items[$i],
                'price' => $prices[$i],
                'image' => $items[$i] .".jpg"
            ]);
        }
    }
}
