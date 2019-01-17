<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class DashboardController extends Controller
{
    public function index()
    {
    	$user_data = Session::get('user')[0];
    	return view('tab-content.dashboard', compact('user_data'));
    }
}
