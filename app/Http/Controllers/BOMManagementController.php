<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BOMModel;
use App\LogsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

class BOMManagementController extends Controller
{
	protected $BOMModel;
    protected $LogsModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->BOMModel = new \App\BOMModel;
        $this->LogsModel = new \App\LogsModel;
    }

    public function index()
    {
    	$user_data = Session::get('user')[0];
    	$boms = $this->BOMModel->getBOMs();
    	return view('tab-content.bom-management', compact('boms','user_data'));
    }
}
