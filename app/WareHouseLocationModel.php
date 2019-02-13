<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouseLocationModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'warehouse_location';

    // Convert Objects to Array
    public function objectToArray($data)
    {
        if (is_array($data) || is_object($data))
        {
            $result = array();
            foreach ($data as $key => $value)
            {
                $result[$key] = $this->objectToArray($value);
            }
            return $result;
        }
        return $data;
    }

    // Fetch all Locations
    public function getAllWarehouseLocation()
    {
    	$all = ($this::all())->toArray();
    	return $all;
    }

    // Add Warehouse Location
    public function addWarehouseLocation($data)
    {
    	$add = $this::insert([$data]);
    	if($add)
        {
            return $add;
        }
        else
        {
            return false;
        }
    }

    // Update Warehouse Location
    public function updateWarehouseLocation($data)
    {
    	$result = $this::where('id',$data['id'])->update($data);
    	if($result)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    // Delete Warehouse Location
    public function deleteWarehouseLocation($data)
    {
    	$result = $this::where('id',$data['id'])->delete();
    	if($result)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
}
