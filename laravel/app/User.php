<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'username', 'name', 'email', 'password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

	protected $guarded = array();

    public function coops()
    {
        return $this->belongsToMany('App\Coop');
    }
    public function jobs()
    {
        return $this->belongsToMany('App\Job');
    }
	public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }
}
