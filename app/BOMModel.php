<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BOMModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'material_code', 'description', 'unit'
    ];
    protected $table = 'bom';

    public function getBOMs()
    {
    	$result = ($this::all())->toArray();
    	return $result;
    }
}
