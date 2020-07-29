
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Language;
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

$factory->define(Language::class, function (Faker  $faker) {
    return [
        'description' => $faker->text($maxNbChars = 100) ,
        'written_level' => $faker->randomDigit ,
        'spoken_level' => $faker->randomDigit ,
        'reading_level' => $faker->randomDigit ,
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});