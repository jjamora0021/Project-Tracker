<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class WarehouseLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('warehouse_location')->insert([
        	[
        		'location' => 'AAI Las Piñas',
        		'area_code' => 'ncr',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'AAI BATINO LAGUNA',
        		'area_code' => 'slz',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'AAI Bicol',
        		'area_code' => 'slz',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'AAI Mexico',
        		'area_code' => 'nlz',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'GWLS Cebu',
        		'area_code' => 'vis',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        ]);
    }
}
