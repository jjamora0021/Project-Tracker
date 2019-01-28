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

    // Update Location
    public function updateLocation($code, $data)
    {
        $update = $this::where('abbrv',$code)->update($data);
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteLocation($code, $location)
    {
        $delete = $this::where('abbrv',$code)->where('location',$location)->delete();
        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
