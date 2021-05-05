<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Frango;
use App\Models\Lote;
use Faker\Generator as Faker;

$factory->define(Frango::class, function (Faker $faker) {
    return [
        //
        'corFrangos'               => $faker->colorName(),
        'subespecieFrangos'        => $faker->word(),
        'sexoFrangos'              => $faker->randomElement(['M', 'F']),
        'estadoFrangos'            => $faker->randomElement(['V', 'M', 'P', 'G']), 
        'valorFrangos'             => 15.2, 
        'lotes_id'                 => factory(Lote::class)->create()->id,
    ];
});
