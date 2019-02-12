<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        $items = ["Laser Radial", "Laser 4.7", "Laser Standart"];
        $prices = [7000, 5000, 9000];

        for ($i=0; $i<3; $i++) {
            Item::create([
                'name' => $items[$i],
                'price' => $prices[$i],
                'sku' => 'item'.$i,
                'status'=> 'disable',
                'specialPrice'=> $prices[$i]*0.9,
                'description'=> 'Description'
            ]);
        }
    }
}
