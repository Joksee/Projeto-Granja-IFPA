<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lote;
use Doctrine\Inflector\Rules\Word;
use Faker\Generator as Faker;

$factory->define(Lote::class, function (Faker $faker) {
    return [
        //
        'localLotes'        => $faker->unique()->Word,
        'valorPagoLotes'    => 13.50,
        'pesoInicialLotes'  => $faker->numberBetween(0, 10),
        'dataInicialLotes'  => $faker->date()
    ];
});
