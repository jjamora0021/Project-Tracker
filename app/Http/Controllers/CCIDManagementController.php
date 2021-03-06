<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CCIDManagementModel;
use App\WareHouseLocationModel;
use App\LogsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

class CCIDManagementController extends Controller
{
    protected $CCIDManagementModel;
    protected $WareHouseLocationModel;
    protected $LogsModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->CCIDManagementModel = new \App\CCIDManagementModel;
        $this->WareHouseLocationModel = new \App\WareHouseLocationModel;
        $this->LogsModel = new \App\LogsModel;
    }

    public function index()
    {
    	$user_data = Session::get('user')[0];
        $warehouselocations = $this->WareHouseLocationModel->getAllWarehouseLocation();
        $ccid = [];
    	return view('tab-content.ccid-management', compact('user_data','ccid','warehouselocations'));
    }
}
