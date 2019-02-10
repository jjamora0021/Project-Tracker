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
        $this->call(UsersTableSeeder::class);
        $this->call(BoqTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(BomTableSeeder::class);
        $this->call(WarehouseLocationTableSeeder::class);
    }
}
