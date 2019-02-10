<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(\Auth::check()){
       return redirect('home');
    }
    else{
        return redirect('login');
    }
});

Auth::routes();
// Check what type of user and redirects accordingly
Route::get('home', 'HomeController@index')->name('home');

/**
 * Dashboard
 */

// Load Dashboard Page
Route::get('dashboard', 'DashboardController@index');

/**
 * Locations
 */

// Load Locations Page
Route::get('locations', 'LocationsController@index');
// Fetch All Locations
Route::get('get-all-locations', 'LocationsController@getAllLocations');
// Add New Location
Route::get('save-location', 'LocationsController@saveLocation');
// Update Location
Route::get('update-location', 'LocationsController@updateLocation');
// Delete Location
Route::get('delete-location', 'LocationsController@deleteLocation');

/**
 * BOQs
 */

// Load BOQ Management Page
Route::get('boq-management', 'BOQManagementController@index');
// Get Details on a BOQ
Route::get('get-boq-details', 'BOQManagementController@getBoqDetails');
// Get All BOQs
Route::get('get-all-boqs', 'BOQManagementController@getAllBOQs');

/**
 * Projects
 */

// Load Projects Page
Route::get('projects', 'ProjectsController@index');
// Add/Save New Project
Route::post('add-project', 'ProjectsController@addProject');
// Get All Details of a Project
Route::get('get-all-project-details', 'ProjectsController@getAllProjectDetails');
// Edit Project Date(s)
Route::get('edit-project-date', 'ProjectsController@editProjectDate');
// Edit Project Status
Route::get('edit-project-status', 'ProjectsController@editProjectStatus');
// Add Scope of Work to project
Route::get('add-scope-of-work/{project_id}/{project_code}', 'ProjectsController@addScopeOfWork');
// Update Scope of Work list on a project
Route::post('add-scope-of-work-to-project', 'ProjectsController@updateScopeOfWorkList');
// Load Projects on a specified Location
Route::get('projects/{location}', 'ProjectsController@loadLocationProjects');

/**
 * Daily Progress
 */

// Save Progress
Route::get('save-daily-progress', 'DailyProgressController@saveDailyProgress');
//Request to Update Progress
Route::get('request-to-update-progress', 'DailyProgressController@requestToUpdateProgress');
// Approve Request to Update Progress
Route::get('approve-to-update-progress', 'DailyProgressController@approveRequestToUpdateProgress');

/**
 * BOM Management
 */

// Load BOM Management Page
Route::get('bom-management', 'BOMManagementController@index');
// Save BOM
Route::get('save-bom', 'BOMManagementController@saveBOM');
// Get BOM details
Route::get('get-bom-details', 'BOMManagementController@getBOMDetails');
// Update BOM details
Route::get('update-bom', 'BOMManagementController@updateBOMDetails');
// Delete BOM
Route::get('delete-bom', 'BOMManagementController@deleteBOM');

/**
 * Logs
 */

// Load All Logs
Route::get('logs', 'LogsController@index');
// Get Log Details
Route::get('get-log-details', 'LogsController@getLogDetails');

/**
 * Warehouse Location
 */

// Load All Warehouse Locations