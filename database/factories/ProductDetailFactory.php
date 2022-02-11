<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductDetails;
use Faker\Generator as Faker;

$factory->define(ProductDetails::class, function (Faker $faker) {
    return [
        'product_id' => factory(\App\Models\Products::class),
        'category_id' => factory(\App\Models\Categories::class)
        
    ];
});
