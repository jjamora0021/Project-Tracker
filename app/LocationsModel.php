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
}
