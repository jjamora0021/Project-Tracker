<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ProgressRequestsController;

use App\LogsModel;

use Session;

class DashboardController extends Controller
{
	protected $ProgressRequestsController;
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
        $this->ProgressRequestsController = new \App\Http\Controllers\ProgressRequestsController;
        // Load Models
        $this->LogsModel = new \App\LogsModel;
    }

    public function index()
    {
    	$user_data = Session::get('user')[0];
    	$requests = $this->ProgressRequestsController->fetchRequestsForUpdate();

        $for_approval = [];
        $approved = [];
        $denied = [];
        foreach ($requests as $key => $value) {
            switch ($value['status']) {
                case 'for approval':
                    $for_approval[] = $value;
                    break;
                case 'approved':
                    $approved[] = $value;
                    break;
                case 'denied':
                    $denied[] = $value;
                    break;
            }
        }

        $requests = [
            'for_approval' => $for_approval,
            'approved' => $approved,
            'denied' => $denied
        ];
        
        // dd($requests);
    	return view('tab-content.dashboard', compact('user_data','requests'));
    }
}
