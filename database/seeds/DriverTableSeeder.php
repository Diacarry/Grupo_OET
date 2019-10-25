<?php

use Illuminate\Database\Seeder;

class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'identification' => '123456789',
            'first_name' => 'Yudi',
            'second_name' => 'Katerin',
            'last_name' => 'Talero Rojas',
            'address' => 'Calle real 4000',
            'phone' => '3229471278',
            'city' => 'Funza',
        ]);
    }
}
