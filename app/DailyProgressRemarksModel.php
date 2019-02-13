<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProjectsModel;

use DB;

class DailyProgressRemarksModel extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'daily_progress_remarks';

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

    // Check if Remarks record already exists
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

    // Save Daily Progress Remarks
    public function saveDailyProgressRemarks($data)
    {
    	$check = $this->checkIfExists($data['project_id'], $data['project_code'], $data['boq_control_number']);

    	if($check == 'empty')
    	{
    		$add_remarks = $this::insert([$data]);
	    	if($add_remarks)
	    	{
	    		DB::table('projects')
					->where('id',$data['project_id'])
					->where('project_code',$data['project_code'])
					->update(['remarks' => 'Not Null']);
	    		return $add_remarks;
	    	}
	    	else
	    	{
	    		return false;
	    	}
    	}
    	else
    	{
    		$update_remarks = $this::where('project_id', $data['project_id'])
                        			->where('project_code', $data['project_code'])
                        			->where('boq_control_number', $data['boq_control_number'])
                        			->update($data);
			if($update_remarks)
			{
				DB::table('projects')
					->where('id',$data['project_id'])
					->where('project_code',$data['project_code'])
					->update(['remarks' => 'Not Null']);
				return $update_remarks;
			}
			else
			{
				return false;
			}
    	}
    }
}
