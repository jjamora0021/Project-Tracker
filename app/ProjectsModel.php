<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ProjectsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

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

    // Get All Projects
    public function getAllProjects()
    {
    	$projects = ($this::all())->toArray();
        if(!empty($projects))
        {
            $result = [];
            foreach ($projects as $key => $value) {
                $location = (DB::table('locations')
                                ->select('location')
                                ->where('abbrv',$value['location'])
                                ->get())->toArray();
                $value['location'] = $location[0]->location;
                $result[] = $value;
            }
            
            return $result;
        }
        else
        {
            return false;
        }
    }

    // Add New Project
    public function addProject($data)
    {
        $add_project = $this::insert([$data]);
        if($add_project)
        {
            return $add_project;
        }
        else
        {
            return false;
        }
    }

    // Get All Project Details
    public function getAllProjectDetails($id, $project_code)
    {
        $data = ($this::where('id',$id)->where('project_code',$project_code)->get())->toArray();
        
        if(!empty($data))
        {
            return $data[0];
        }
        else
        {
            return false;
        }
    }

    // Edit Project Date(s)
    public function editProjectDate($project_id, $project_code, $db_field, $date_value)
    {
        $data = [
            $db_field => $date_value
        ];
        
        $result = $this::where('id', $project_id)->where('project_code', $project_code)->update($data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // Update Scope Of Work List on a Project
    public function updateScopeOfWorkList($id, $project_code, $data)
    {
        $result = $this::where('id', $id)->where('project_code', $project_code)->update($data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function loadLocationProjects($location)
    {
        $result = (DB::table('locations')->select('abbrv')->where('location',$location)->get())->toArray();
        $abbrv = $this->objectToArray($result[0])['abbrv'];
        
        $projects = ($this::where('location',$abbrv)->get())->toArray();
        return $projects;
    }
}
