
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ability;
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

$factory->define(Ability::class, function (Faker $faker) {
    return [
        'category' => $faker->text(rand(32, 10)),
        'description' => $faker->text(rand(32, 10)),
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});