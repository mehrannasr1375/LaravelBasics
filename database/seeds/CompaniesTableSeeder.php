<?php
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        /*DB::table('companies')->insert([
            'name' => 'Company A',
            'phone' => '022-222-22-22'
        ]);*/
        factory(\App\Company::class, 6)->create();
    }
}
