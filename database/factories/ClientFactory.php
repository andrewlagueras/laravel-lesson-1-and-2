<?php

use Faker\Generator as Faker;
use \App\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        
    	'name' 	=> $faker->name,
    	'product_id'		=> 1,
    	// 'seller_id'		=> Seller::select('id')->inRandomOrder()->first()->id,

    ];
});

