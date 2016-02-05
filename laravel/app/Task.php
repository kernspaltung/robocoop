<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   
	protected $fillable = ['name','description','extra_info','date_expected','date_finished', 'done', 'status', 'user_id'];

    protected $casts = [
        'asignees' => 'array'
    ];

	protected $guarded = array();


    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
    public function task()
    {
        return $this->belongsTo('App\Task');
    }
    
    public function coops()
    {
        return $this->belongsToMany('App\Coop');
    }
    public function jobs()
    {
        return $this->belongsToMany('App\Job');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }



}
