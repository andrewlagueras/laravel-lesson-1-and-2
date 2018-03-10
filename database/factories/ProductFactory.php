<?php

use Faker\Generator as Faker;
use \App\Seller;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        
    	'product_name' 	=> $faker->name,
    	'price'			=> rand(10, 999),
    	'stock'			=> rand(1, 10),
    	'seller_id'		=> 1,
    	// 'seller_id'		=> Seller::select('id')->inRandomOrder()->first()->id,

    ];
});
