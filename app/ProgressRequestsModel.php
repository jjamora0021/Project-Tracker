<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ProgressRequestsModel extends Model
{
    protected $table = 'request_for_updates';

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

    public function fetchRequestsForUpdate()    
    {
        $result = ($this::all())->toArray();
        $arr = [];
        foreach ($result as $key => $value) {
            $arr = (DB::table('daily_progress')
                        ->select('progress','total_progress')
                        ->where('project_id',$value['project_id'])
                        ->where('project_code',$value['project_code'])
                        ->where('boq_control_number',$value['boq_control_number'])
                        ->get())->toArray()[0];
            $result[$key]['current_data'] = $this->objectToArray($arr);
        }
        
        return $result;
    }

    public function requestForUpdate($data)
    {
    	$add_request = $this::insert([$data]);
    	if($add_request)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function approveRequestForUpdate($request_id, $data)
    {
        $update_progress = $this::where('request_id', $request_id)
                                ->where('project_id', $data['project_id'])
                                ->where('project_code', $data['project_code'])
                                ->where('boq_control_number', $data['boq_control_number'])
                                ->update($data);
        if($update_progress)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
