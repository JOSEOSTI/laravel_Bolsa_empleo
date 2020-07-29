<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfessionalExperience;
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
$factory->define(ProfessionalExperience::class, function (Faker $faker) {
    return [
        'employer' => $faker->text(rand(32, 10)),
        'position' => $faker->text(rand(32, 10)),
        'job_description' => $faker->text(rand(32, 10)),
        'start_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'finish_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'reason_leave' => $faker->text(rand(32, 10)),
        'professional_id' => function () {
            return factory(App\Models\Professional::class)->create()->id;
        }
    ];
});
