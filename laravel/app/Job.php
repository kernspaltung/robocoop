<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{   
	protected $fillable = [
		'name','description','deliverables','status','administrators','members','tasks','sessions','materials','payments'
	];

    protected $casts = [
		'deliverables' => 'array',
		'administrators' => 'array',
		'members' => 'array',
		'tasks' => 'array',
		'sessions' => 'array',
		'materials' => 'array',
		'payments' => 'array',
    ];

    public function coops()
    {
        return $this->belongsToMany('App\Coop');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
	
}
