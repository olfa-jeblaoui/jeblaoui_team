<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pax::class, function (Faker $faker) {
    return [
        $age = array(),
for ($i = 1, $i = 100, $i++){
  // get a random digit, but always a new one, to avoid duplicates
  $age[]= $faker->unique()->randomDigit,
}
print_r($age),
    ];
});
