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
}
