<?php
/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'family' => $faker->lastName,
        'registered' => 1,
        'company_id' => factory(App\Company::class)->create(),
    ];

    /*return [
        'name' => $faker->firstName,
        'family' => $faker->lastName,
        'registered' => 0,
        'company_id' => factory(App\Company::class)->create(),
    ];*/
});
