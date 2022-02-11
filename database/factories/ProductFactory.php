<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use Faker\Generator as Faker;
use Illuminate\Validation\Rules\Unique;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name_product' => $faker->unique()->words(3, true), 
        'price' => $faker->randomFloat(2, 10, 100), 
        'stok' => 100, 
        'description' => $faker->realText(200),
        'category_id' => factory(\App\Models\Categories::class)
    ];
});
