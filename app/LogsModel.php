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
    public function createLog($user_data, $timestamp)
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
}
