<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class freelancer extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public function tasks()
    {
    	return $this->belongsToMany('App\Task' , 'freelancer_tasks');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill' , 'freelancer_skills');
    }
}
