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

    public function checkIfBomExists($code)
    {
        $result = ($this::where('material_code',$code)->get())->toArray();
        if(empty($result) == true)
        {
            return 'available';
        }
        else
        {
            return 'taken';
        }
    }

    public function saveBOM($user_data, $timestamp, $data)
    {
        $check = $this->checkIfBomExists($data['material_code']);
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

    public function getBomDetails($id, $material_code)
    {
        $data = ($this::where('id',$id)->where('material_code',$material_code)->get())->toArray();
        return $data;
    }

    public function updateBOMDetails($data)
    {
        $update = $this::where('material_code',$data['material_code'])->update($data);
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteBOM($data)
    {
        $delete = $this::where('id',$data['id'])->where('material_code',$data['material_code'])->delete();
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
