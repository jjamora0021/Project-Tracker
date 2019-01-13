<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon::now();
        DB::table('locations')->insert([
        	[
        		'location' => 'Greater Metro Manila',
        		'abbrv' => 'gmm',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Bulacan',
        		'abbrv' => 'nlz_bulacan',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Laguna',
        		'abbrv' => 'slz_laguna',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Batangas',
        		'abbrv' => 'slz_batangas',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Cavite',
        		'abbrv' => 'slz_cavite',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Cebu',
        		'abbrv' => 'vis_cebu',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'location' => 'Palawan',
        		'abbrv' => 'vis_palawan',
        		'created_at' => $now,
        		'updated_at' => $now
        	],
            [
                'location' => 'Davao',
                'abbrv' => 'min_davao',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
