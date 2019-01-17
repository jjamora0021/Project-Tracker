<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\BOQManagementController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ProjectsController;

use Session;

class HomeController extends Controller
{
    protected $BOQManagementController;
    protected $LocationsController;
    protected $ProjectsController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->BOQManagementController = new \App\Http\Controllers\BOQManagementController;
        $this->LocationsController = new \App\Http\Controllers\LocationsController;
        $this->ProjectsController = new \App\Http\Controllers\ProjectsController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_data = Session::get('user')[0];
        $boqs = $this->BOQManagementController->getBOQs();
        $locations = $this->LocationsController->getAllLocations();
        $projects = $this->ProjectsController->getAllProjects();
        
        return view('home', compact('user_data'));
    }
}
