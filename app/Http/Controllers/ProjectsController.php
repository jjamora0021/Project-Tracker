<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectsModel;
use App\BOQModel;
use App\DailyProgressModel;
use \App\LogsModel;
use App\LocationsModel;

use App\Http\Controllers\LocationsController;
use App\Http\Controllers\BOQManagementController;

use Carbon\Carbon;
use DB;
use Session;
use Input;
use Config;

class ProjectsController extends Controller
{
	protected $ProjectsModel;
    protected $BOQModel;
    protected $DailyProgressModel;
    protected $LogsModel;
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
        $this->LogsModel = new \App\LogsModel;
        $this->LocationsModel = new \App\LocationsModel;

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

    // Fetch all Projects
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

    // Add Project
    public function addProject(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

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

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'result' => 'null'
        ];

        if($result != false)
        {
            $details['result'] = 'success';
            $this->LogsModel->createProjectLog($user_data, $now, $details, $request['project_code']);
            return back()->with('success', 'Project added successfully.');
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createProjectLog($user_data, $now, $details, $request['project_code']);
            return back()->with('danger', 'Something went wrong. Please check your inputs and try again.');
        }
    }

    public function getDatesFromRange($date_time_from, $date_time_to)
    {
        // cut hours, because not getting last day when hours of time to is less than hours of time_from
        // see while loop
        $start = Carbon::createFromFormat('Y-m-d', substr($date_time_from, 0, 10));
        $end = Carbon::createFromFormat('Y-m-d', substr($date_time_to, 0, 10));

        $dates = [];

        while ($start->lte($end)) {

            $dates[] = $start->copy()->format('Y-m-d');

            $start->addDay();
        }

        return $dates;
    }

    // Fetch all the Project Details
    public function getAllProjectDetails(Request $request)
    {
        $data = $this->ProjectsModel->getAllProjectDetails($request['id'],$request['project_code']);

        if($data != false)
        {
            // calculate the timeframe in days of the project
            $date_start = Carbon::parse($data['date_start']);
            $date_end = Carbon::parse($data['date_end']);
            $days = $date_start->diffInDays($date_end) + 1;
            $date_range = $this->getDatesFromRange($date_start, $date_end);
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
            $data['date_range'] = $date_range;
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

    // Edit Project Date(s)
    public function editProjectDate(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $project_id = $request['project_id'];
        $project_code = $request['project_code'];
        $db_field = $request['db_field'];
        $date_value = Carbon::parse($request['date_value']);

        $update_date = $this->ProjectsModel->editProjectDate($project_id, $project_code, $db_field, $date_value);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'project_id' => $request['project_id'],
            'project_code' => $request['project_code'],
            'result' => 'null'
        ];

        if($update_date == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createUpdateProjectLog($user_data, $now, $details);
            return response()->json($date_value->toDateString());
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createUpdateProjectLog($user_data, $now, $details);
            return false;
        }
    }

    // Edit Project Status
    public function editProjectStatus(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $project_id = $request['project_id'];
        $project_code = $request['project_code'];
        $db_field = $request['db_field'];
        $status = $request['status'];

        $update_status = $this->ProjectsModel->editProjectStatus($project_id, $project_code, $db_field, $status);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'project_id' => $request['project_id'],
            'project_code' => $request['project_code'],
            'result' => 'null'
        ];

        if($update_status == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createUpdateProjectStatusLog($user_data, $now, $details, $project_code);
            $set_status = Config::get('status');
            foreach ($set_status as $key => $value) {
                if($status == $key)
                {
                    $status = $value;
                }
            }
            $response = [
                'response' => 'true',
                'status' => $status
            ];
            return response()->json($response);
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createUpdateProjectStatusLog($user_data, $now, $details, $project_code);
            return false;
        }
    }

    // Add Scope Of Work To Project
    public function addScopeOfWork($project_id, $project_code)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $project_details = $this->ProjectsModel->getAllProjectDetails($project_id, $project_code);

        $location = $this->LocationsModel->getLocationDetails($project_details['location']);
        $project_details['location'] = $location['location'];
        $project_details['abbrv'] = $location['abbrv'];

        // index for boq_details array is from the row number which starts at 1 (row counter).
        $boq_details = $this->objectToArray(json_decode($project_details['boq_details']));
        $boqs = $this->BOQModel->getBOQs();
        return view('tab-content.add-scope-of-work', compact('user_data','project_details','boq_details','boqs'));
    }

    // Update Scope Of Work List
    public function updateScopeOfWorkList(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

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
            'boq_details' => json_encode($boq_details),
            'total_project_cost' => $request['grand_total_cost'],
            'total_project_qty' => $total_qty
        );

        $result = $this->ProjectsModel->updateScopeOfWorkList($request['project_id'],$request['project_code'],$data);

        $details = [
            'user' => $user_data['username'],
            'boq_details' => json_encode($boq_details),
            'timestamp' => $now,
            'result' => 'null'
        ];

        if($result != false)
        {
            $details['result'] = 'success';
            $this->LogsModel->createAddScopeOfWorkLog($user_data, $now, $details, $request['project_code']);
            return back()->with('success', 'Added Scope of Work successfully!');
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createAddScopeOfWorkLog($user_data, $now, $details, $request['project_code']);
            return back()->with('danger', 'Something went wrong. Please check your inputs and try again.');
        }
    }

    public function loadLocationProjects($location)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $projects = $this->ProjectsModel->loadLocationProjects($location);
        if(!empty($projects))
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
            
            return view('tab-content.projects-location', compact('projects','user_data','location'));
        }
        else
        {
            return view('tab-content.projects-location', compact('projects','user_data','location'));
        }
    }
}
