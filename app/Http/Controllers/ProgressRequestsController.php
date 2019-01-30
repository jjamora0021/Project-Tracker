<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProgressRequestsModel;

class ProgressRequestsController extends Controller
{
    protected $LogsModel;

    protected $ProgressRequestsController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->LogsModel = new \App\LogsModel;
        $this->ProgressRequestsModel = new \App\ProgressRequestsModel;
    }


    public function fetchRequestsForUpdate()
    {
    	$requests = $this->ProgressRequestsModel->fetchRequestsForUpdate();
    	return $requests;
    }
}
