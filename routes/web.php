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
// Save BOQ
Route::get('save-new-boq', 'BOQManagementController@saveBOQ');
// Update BOQ details
Route::get('update-boq', 'BOQManagementController@updateBOQDetails');
// Delete BOQ
Route::get('delete-boq', 'BOQManagementController@deleteBOQ');

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
// Load Remarks Page of Porject
Route::get('project-remarks/{project_id}/{project_code}', 'ProjectsController@projectRemarks');
// Delete Project
Route::get('delete-project','ProjectsController@deleteProject');

/**
 * Daily Progress
 */

// Save Progress
Route::get('save-daily-progress', 'DailyProgressController@saveDailyProgress');
//Request to Update Progress
Route::get('request-to-update-progress', 'DailyProgressController@requestToUpdateProgress');
// Approve Request to Update Progress
Route::get('approve-to-update-progress', 'DailyProgressController@approveRequestToUpdateProgress');

// Save Progess Remarks
Route::get('save-daily-progress-remarks', 'DailyProgressRemarksController@saveDailyProgressRemarks');

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
Route::get('warehouse-locations', 'WarehouseLocationController@index');
// Add Warehouse Location
Route::get('add-warehouse-location','WarehouseLocationController@addWarehouseLocation');
// Update Warehouse Location
Route::get('update-warehouse-location', 'WarehouseLocationController@updateWarehouseLocation');
// Delete Warehouse Location
Route::get('delete-warehouse-location', 'WarehouseLocationController@deleteWarehouseLocation');

/**
 * CCID Management
 */

// Load CCID Management Page
Route::get('ccid-management', 'CCIDManagementController@index');