<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ClothingSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Red Dress', 'keywords' => 'dress, red, summer']);
        Item::create(['name' => 'Blue Jeans', 'keywords' => 'jeans, blue, casual']);
        Item::create(['name' => 'Green T-Shirt', 'keywords' => 't-shirt, green, casual']);
        Item::create(['name' => 'Black Jacket', 'keywords' => 'jacket, black, winter']);
        Item::create(['name' => 'White Sneakers', 'keywords' => 'sneakers, white, casual']);
    }
} 