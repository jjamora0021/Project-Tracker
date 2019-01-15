<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectsModel;
use App\BOQModel;

use Carbon\Carbon;
use DB;

class ProjectsController extends Controller
{
	protected $ProjectsModel;
    protected $BOQModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->ProjectsModel = new \App\ProjectsModel;
        $this->BOQModel = new \App\BOQModel;
    }

    // Convert Objects to Array
    function objectToArray($data)
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

    public function getAllProjects()
    {
    	$projects = $this->ProjectsModel->getAllProjects();
    	return $projects;
    }

    public function addProject(Request $request)
    {
        $boq_details = [];
        foreach ($request['row'] as $key => $value) {
            $boq_details[$key]['controlnumber'] = $value['controlnumber'];
            $boq_details[$key]['quantity'] = (int)$value['quantity'];
            $boq_details[$key]['price'] = (int)$value['price'];
            $boq_details[$key]['total'] = (int)$value['total'];
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

        if($result != false)
        {
            return back()->with('success', 'Project added successfully.');
        }
        else
        {
            return back()->with('danger', 'Something went wrong. Please check your inputs and try again.');
        }
    }

    public function getAllProjectDetails(Request $request)
    {
        $data = $this->ProjectsModel->getAllProjectDetails($request['id'],$request['project_code']);

        if($data != false)
        {
            // calculate the timeframe in days of the project
            $date_start = Carbon::parse($data['date_start']);
            $date_end = Carbon::parse($data['date_end']);
            $days = $date_start->diffInDays($date_end) + 1;

            // convert BOQ details from object to array
            $boq_details = $this->objectToArray(json_decode($data['boq_details']));
            // converts Quantity, Price and Total from String to Integer
            foreach ($boq_details as $key => $value) {
                $boq_details[$key]['controlnumber'] = $value['controlnumber'];
                // get boq description
                $boq_description = $this->BOQModel->getBoqDetails($value['controlnumber']);
                $boq_details[$key]['boq_description'] = $boq_description['description'];

                $boq_details[$key]['quantity'] = (int)$value['quantity'];
                $boq_details[$key]['price'] = (int)$value['price'];
                $boq_details[$key]['total'] = (int)$value['total'];
            }
            // Get CTRL Number and Desciption
            $data['boq_details'] = $boq_details;
            $data['number_of_days'] = $days;

            return response()->json($data);
        }
        else
        {
            return false;
        }
    }
}
