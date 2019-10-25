<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'license_plate' => 'XXX-000',
            'color' => 'negro',
            'brand' => 'Yamaha',
            'type' => 'Particular',
            'fk_owner' => '987656789',
            'fk_driver' => '123456789'
        ]);
    }
}
