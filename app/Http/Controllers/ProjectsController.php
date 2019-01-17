<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectsModel;
use App\BOQModel;
use App\DailyProgressModel;

use App\Http\Controllers\LocationsController;
use App\Http\Controllers\BOQManagementController;

use Carbon\Carbon;
use DB;
use Session;

class ProjectsController extends Controller
{
	protected $ProjectsModel;
    protected $BOQModel;
    protected $DailyProgressModel;
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
        $this->DailyProgressModel = new \App\DailyProgressModel;
        $this->LocationsController = new \App\Http\Controllers\LocationsController;
        $this->BOQManagementController = new \App\Http\Controllers\BOQManagementController;
    }

    // Load Projects Page
    public function index()
    {
        $user_data = Session::get('user')[0];
        $projects = $this->getAllProjects();
        $locations = $this->LocationsController->getAllLocations();
        $boqs = $this->BOQManagementController->getBOQs();
        
        return view('tab-content.projects', compact('projects','locations','boqs','user_data'));
    }

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

    public function getAllProjects()
    {
    	$projects = $this->ProjectsModel->getAllProjects();

        if($projects != false)
        {
            $total_progress = 0;
            $boq = [];
            foreach ($projects as $key => $value) {
                $boq = $this->objectToArray(json_decode($value['boq_details']));
                foreach ($boq as $idx => $val) {
                    $daily_progress = $this->DailyProgressModel->getDailyProgress($value['id'],$value['project_code'],$val['controlnumber']);
                    if($daily_progress != false)
                    {
                        $boq[$idx]['total_progress'] = $daily_progress[0]['total_progress'];
                    }
                    else
                    {
                        $boq[$idx]['total_progress'] = 0;
                    }
                }
                $projects[$key]['boq_details'] = $boq;
            }
            // dd($projects);
            return $projects;
        }
        else
        {
            return false;
        }
    }

    public function addProject(Request $request)
    {
        $boq_details = [];
        $total_qty = 0;
        foreach ($request['row'] as $key => $value) {
            $boq_details[$key]['controlnumber'] = $value['controlnumber'];
            $boq_details[$key]['quantity'] = (int)$value['quantity'];
            $boq_details[$key]['price'] = (int)$value['price'];
            $boq_details[$key]['total'] = (int)$value['total'];
            $total_qty += (int)$value['quantity'];
        }
        
        $data = array(
            'site_name' => $request['site_name'],
            'location' => $request['location'],
            'date_start' => Carbon::parse($request['date_start']),
            'date_end' => Carbon::parse($request['date_end']),
            'project_code' => $request['project_code'],
            'work_order_number' => $request['work_order_number'],
            'ccid' => $request['ccid'],
            'boq_details' => json_encode($boq_details),
            'total_project_cost' => $request['grand_total_cost'],
            'total_project_qty' => $total_qty
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
            $total_progress = 0;
            
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

                $daily_progress = $this->DailyProgressModel->getDailyProgress($request['id'],$request['project_code'],$value['controlnumber']);
                
                if($daily_progress != false)
                {
                    $boq_details[$key]['progress'] = $this->objectToArray(json_decode($daily_progress[0]['progress']));
                    $total_progress += $this->objectToArray(json_decode($daily_progress[0]['total_progress'])); 
                }
                else
                {
                    $boq_details[$key]['progress'] = [];
                }
            }
            // Get CTRL Number and Desciption
            $data['boq_details'] = $boq_details;
            $data['number_of_days'] = $days;
            $data['total_progress'] = $total_progress;
            
            foreach ($data['boq_details'] as $key => $value) {
                $boq_total_progress = 0;
                foreach ($value['progress'] as $idx => $val) {
                    $boq_total_progress += (int)$val;
                }
                $data['boq_details'][$key]['boq_total_progress'] = $boq_total_progress;
            }

            return response()->json($data);
        }
        else
        {
            return false;
        }
    }
}
