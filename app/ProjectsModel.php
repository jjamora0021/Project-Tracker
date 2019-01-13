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
        $result = [];
        foreach ($projects as $key => $value) {
            $location = (DB::table('locations')
                            ->select('location')
                            ->where('abbrv',$value['location'])
                            ->get())->toArray();
            $value['location'] = $location[0]->location;
            $result[] = $value;
        }
        // dump($result);
        // dd('die');
    	return $result;
    }

    // Add New Project
    public function addProject($data)
    {
        $add_project = $this::insert([$data]);
        return $add_project;
    }
}
