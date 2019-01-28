<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\BOQManagementController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ProjectsController;

use App\LogsModel;

use Auth;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    protected $BOQManagementController;
    protected $LocationsController;
    protected $ProjectsController;
    protected $LogsModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Load Controllers
        $this->BOQManagementController = new \App\Http\Controllers\BOQManagementController;
        $this->LocationsController = new \App\Http\Controllers\LocationsController;
        $this->ProjectsController = new \App\Http\Controllers\ProjectsController;
        // Load Models
        $this->LogsModel = new \App\LogsModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $boqs = $this->BOQManagementController->getBOQs();
        $locations = $this->LocationsController->getAllLocations();
        $projects = $this->ProjectsController->getAllProjects();
        
        if($user = Auth::user())
        {
            $this->LogsModel->createLog($user_data, $now);

            if($user_data['user_role'] == 'admin')
            {
                return redirect('dashboard');
            }
            else
            {
                return redirect('locations');
            }
        }
        else
        {
            return redirect('login');
        }
    }
}
