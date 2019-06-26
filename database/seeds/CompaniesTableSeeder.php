<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Company A',
            'phone' => '022-222-22-22'
        ]);
        DB::table('companies')->insert([
            'name' => 'Company B',
            'phone' => '033-333-33-33'
        ]);
        DB::table('companies')->insert([
            'name' => 'Company C',
            'phone' => '044-444-44-44'
        ]);
        DB::table('companies')->insert([
            'name' => 'Company D',
            'phone' => '055-555-55-55'
        ]);
    }
}
