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
}
