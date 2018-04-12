<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'task_technoloies' );
    }
    public function freelancers()
    {
        return $this->belongsToMany('App\freelancer', 'freelancer_skills' );
    }

}
