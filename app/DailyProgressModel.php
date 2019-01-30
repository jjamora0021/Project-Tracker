<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyProgressModel extends Model
{
    protected $table = 'daily_progress';

    // Check if Progress record already exists
    public function checkIfExists($project_id, $project_code, $boq_control_number)
    {
    	$result = ($this::where('project_id',$project_id)->where('project_code',$project_code)->where('boq_control_number',$boq_control_number)->get())->toArray();
    	if(empty($result))
    	{
    		return 'empty';
    	}
    	else
    	{
    		return false;
    	}
    }

    // Get Project Daily Progress Details
    public function getDailyProgress($project_id, $project_code, $boq_control_number)
    {
        $result = ($this::select('progress','total_progress')->where('project_id',$project_id)->where('project_code',$project_code)->where('boq_control_number',$boq_control_number)->get())->toArray();
        if(!empty($result))
        {
        	return $result;
        }
        else
        {
        	return false;
        }
    }

    // Save Daily Progress
    public function saveDailyProgress($data)
    {
    	$check = $this->checkIfExists($data['project_id'], $data['project_code'], $data['boq_control_number']);

    	if($check == 'empty')
    	{
    		$add_progress = $this::insert([$data]);
	    	if($add_progress)
	    	{
	    		return $add_progress;
	    	}
	    	else
	    	{
	    		return false;
	    	}
    	}
    	else
    	{
    		$update_progress = $this::where('project_id', $data['project_id'])
                        			->where('project_code', $data['project_code'])
                        			->where('boq_control_number', $data['boq_control_number'])
                        			->update($data);
			if($update_progress)
			{
				return $update_progress;
			}
			else
			{
				return false;
			}
    	}
    }

    // Update Daily Progress
    public function updateDailyProgress($data, $new_data)
    {
        $update_progress = $this::where('project_id', $data['project_id'])
                                ->where('project_code', $data['project_code'])
                                ->where('boq_control_number', $data['boq_control_number'])
                                ->update($new_data);
        if($update_progress)
        {
            return $update_progress;
        }
        else
        {
            return false;
        }
    }
}
