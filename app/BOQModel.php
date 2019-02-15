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
        if(!empty($result))
        {
            return $result[0];
        }
        else
        {
            return false;
        }
    }

    public function checkIfBoqExists($code)
    {
        $result = ($this::where('control_number',$code)->get())->toArray();
        
        if(empty($result) == true)
        {
            return 'available';
        }
        else
        {
            return 'taken';
        }
    }

    public function saveBOQ($user_data, $timestamp, $data)
    {
        $check = $this->checkIfBoqExists($data['control_number']);
        if($check == 'available')
        {
            $save = $this::insert([$data]);
            if($save)
            {
                return 'true';
            }
            else
            {
                return 'false';
            }
        }
        else
        {
            return 'taken';
        }
    }

    public function updateBOQDetails($data)
    {
        $update = $this::where('control_number',$data['control_number'])->update($data);
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteBOQ($data)
    {
        $delete = $this::where('id',$data['id'])->where('control_number',$data['control_number'])->delete();
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
