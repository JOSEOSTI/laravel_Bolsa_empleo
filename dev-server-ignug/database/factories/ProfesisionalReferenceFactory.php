<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfessionalReference;
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

$factory->define(ProfessionalReference::class, function (Faker $faker) {
    return [
        'institution' => $faker->text(rand(32, 10)),
        'position' => $faker->text(rand(32, 10)),
        'contact' => $faker->text(rand(32, 10)),
        'phone' => $faker->text(rand(32, 10)),
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});
