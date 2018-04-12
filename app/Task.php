<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name' , 'descreption','employer_id'  , 'budjet'];

    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'task_technoloies' );
    }
    public function employer()
    {
       return $this->belongsTo('App\employer');
    }

}
