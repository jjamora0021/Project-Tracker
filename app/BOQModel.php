<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BOQModel extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'control_number', 'description', 'unit'
    ];
    protected $table = 'boq';

    // Fetch BOQs
    public function getBOQs()
    {
    	$result = ($this::all())->toArray();
    	return $result;
    }

    public function getBoqDetails($control_number)
    {
        $result = ($this::where('control_number',$control_number)->get())->toArray();
        return $result[0];
    }
}
