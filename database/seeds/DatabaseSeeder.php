<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OwnerTableSeeder::class);
        $this->call(DriverTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
    }
}
