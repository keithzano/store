<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Best Selling Winter Check Shirt & Jacket',
            'slug' => 'winter-check-shirt',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 200,

        ]);

        Product::create([
            'name' => 'Yellow Skirt',
            'slug' => 'Yellow-Skirt',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 400,

        ]);

        Product::create([
            'name' => 'White shirt & White short',
            'slug' => 'White-hirt-&-White-short',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 220,

        ]);

        Product::create([
            'name' => 'Men Shorts',
            'slug' => 'Men-Shorts',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 8800,

        ]);

        Product::create([
            'name' => 'Sexy Denim Shorts',
            'slug' => 'Sexy-Denim-Shorts',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 700,

        ]);

        Product::create([
            'name' => 'Princess Red Dress',
            'slug' => 'Princess-Red-Dress',
            'details' => 'The best winter dress ever',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
            'price'=> 7800,

        ]);
    }
}
