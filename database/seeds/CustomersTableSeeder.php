<?php
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Customer::class, 6)->create();
    }
}
