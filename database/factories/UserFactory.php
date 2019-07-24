<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

 /*$factory->define(App\Main::class, function (Faker $faker) {
    return [
        
        'categoryName' => $faker->name,
        'Shortdescription' => $faker->text,
        'publicationStatus' =>1
    ];
}); */


$factory->define(App\picture::class, function (Faker $faker) {
    return [
        
        'productName' => $faker->word,
        'categoryID' => 2,
        'price' => $faker->numberBetween($min = 20, $max = 10000),
        'qty' => $faker->numberBetween($min = 1, $max = 100),
        'shortDescription' => $faker->text,
        'longDescription' => $faker->text,
        'picture' => 'productImage/Ice-Cream-Cone-Cupcakes-Recipe-1-of-1-6.jpg',
        'publicationStatus' => 1,

        
    ];
});


