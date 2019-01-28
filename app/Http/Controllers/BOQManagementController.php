<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BOQModel;
use App\LocationsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

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

    // Load BOQ Page
    public function index()
    {
        $user_data = Session::get('user')[0];
        $boqs = $this->getBOQs();

        return view('tab-content.boq-management', compact('boqs','user_data'));
    }

    // Fetch all BOQs
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
