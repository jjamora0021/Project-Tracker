<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BOQModel;
use App\LocationsModel;

use Carbon\Carbon;
use DB;
use Config;

class BOQManagementController extends Controller
{
    protected $BOQModel;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->BOQModel = new \App\BOQModel;
    }

    // Loads Locations Page
    public function getBOQs()
    {
        $boqs = $this->BOQModel->getBOQs();
        return $boqs;
    }

    // Get Details on a specific BOQ
    public function getBoqDetails(Request $request)
    {
        $boq_details = $this->BOQModel->getBoqDetails($request['control_number']);
        if(!empty($boq_details))
        {
            return response()->json($boq_details);    
        }
        else
        {
            return false;
        }
    }
}
