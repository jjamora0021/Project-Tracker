<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogsModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'username', 'action', 'details','user_role_given'
    ];

    protected $table = 'logs';

    // Fetch All Logs
    public function getAllLogs()
    {
        $logs = ($this::all())->toArray();
        return $logs;
    }

    // Get Log Details
    public function getLogDetails($id)
    {
        $details = ($this::where('id',$id)->get())[0]->toArray();
        return $details;
    }

    /********************** Login **********************/
    // Create Access logs
    public function createLoginLog($user_data, $timestamp)
    {
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $timestamp
        ];
    	$logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Login',
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    /********************** Locations **********************/
    // Create Login Location Logs
    public function createLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Add Location',
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update Location Logs
    public function createUpdateLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Update Location',
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update Location Logs
    public function createDeleteLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Delete Location',
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    /********************** Projects **********************/
    // Create Add Project Logs
    public function createProjectLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Add Project',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update Project Logs
    public function createUpdateProjectLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Update Project',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    public function createUpdateProjectStatusLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Update Project Status',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    /********************** Daily Progress **********************/
    // Create Add Daily Progress Logs
    public function createDailyProgressLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Add Progress on Project',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update on Daily Progress Logs
    public function createRequestUpdateDailyProgressLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Request to Update Progress on Project',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Approved Request for Daily Progress Logs
    public function createApproveDailyProgressUpdateRequestLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Approved request to Update Daily Progress',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Add Scope Of Work Logs
    public function createAddScopeOfWorkLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Added Scope of Work',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Add BOM Logs
    public function createBOMCreationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Added BOM',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update BOM Logs
    public function createUpdateBOMLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Updated BOM',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Delete BOM Logs
    public function createDeleteBOMLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Deleted BOM',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }


    /********************** Warehouse Location **********************/
    // Create Add Warehouse Location Logs
    public function createAddWarehouseLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Added Warehouse Location',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Update Warehouse Location Logs
    public function createUpdateWarehouseLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Updated Warehouse Location',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }

    // Create Delete Warehouse Location Logs
    public function createDeleteWarehouseLocationLog($user_data, $timestamp, $details)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Deleted Warehouse Location',
                'project_code' => NULL,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }


    /********************** Daily Progress Remarks **********************/
    // Create Daily Progress Remarks Logs
    public function createDailyProgressRemarksLog($user_data, $timestamp, $details, $project_code)
    {
        $logs = $this::insert([
                'username' => $user_data['username'],
                'action' => 'Add Progress Remarks on Project',
                'project_code' => $project_code,
                'details' => json_encode($details),
                'user_role_given' => $user_data['user_role'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }
}
