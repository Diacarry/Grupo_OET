<?php

use Illuminate\Database\Seeder;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'identification' => '987654321',
            'first_name' => 'Diego',
            'second_name' => 'Andres',
            'last_name' => 'Carranza Rivera',
            'address' => 'Calle falsa 123',
            'phone' => '+57 321 491 64 03',
            'city' => 'Mosquera',
        ]);
        DB::table('owners')->insert([
            'identification' => '987656789',
            'first_name' => 'Arnold',
            'second_name' => 'Steven',
            'last_name' => 'Tujillo Rivera',
            'address' => 'Calle falsa 122',
            'phone' => '313 348 60 38',
            'city' => 'Mosquera',
        ]);
    }
}
