<?php

use Faker\Generator as Faker;

$factory->define(App\Seller::class, function (Faker $faker) {
    return [

    	'seller_name'	=> $faker->name,

    ];
});
