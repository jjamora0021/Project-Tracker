<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class LocationsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'location', 'abbrv',
    ];
    
    // Gets all Project Locations
    public function getAllLocations()
    {
        $locations = ($this::select('id','location','abbrv')->get())->toArray();
        return $locations;
    }

    // Save New Location
    public function saveLocation($code, $location)
    {
        $check = ($this::where('location',$location)->orWhere('abbrv',$code)->get())->toArray();
        if(!empty($check))
        {
            return false;
        }
        else
        {
            $data = [
                'abbrv' => $code,
                'location' => $location,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            $add = $this::insert([$data]);

            if($add)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
    }
}
