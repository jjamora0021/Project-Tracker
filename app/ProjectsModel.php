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
        return $add_project;
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
}
