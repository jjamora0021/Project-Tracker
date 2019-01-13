<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectsModel;

use Carbon\Carbon;
use DB;

class ProjectsController extends Controller
{
	protected $ProjectsModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->ProjectsModel = new \App\ProjectsModel;
    }

    public function getAllProjects()
    {
    	$projects = $this->ProjectsModel->getAllProjects();
    	return $projects;
    }

    public function addProject(Request $request)
    {
        $boq_details = [];
        foreach ($request['row'] as $key => $value) {
            $boq_details[$key] = $value;
        }
        
        $data = array(
            'site_name' => $request['site_name'],
            'location' => $request['location'],
            'date_start' => Carbon::createFromFormat('d/m/Y', $request['date_start']),
            'date_end' => Carbon::createFromFormat('d/m/Y', $request['date_end']),
            'project_code' => $request['project_code'],
            'work_order_number' => $request['work_order_number'],
            'ccid' => $request['ccid'],
            'boq_details' => json_encode($boq_details),
            'total_project_cost' => $request['grand_total_cost'],
        );
        
        $result = $this->ProjectsModel->addProject($data);

        if($result)
        {
            return back()->with('success', 'Project added successfully.');
        }
        else
        {
            return back()->with('danger', 'Something went wrong. Please check your inputs and try again.');
        }
    }
}
