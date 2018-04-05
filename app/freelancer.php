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
    	return $this->belongToMany('App/Task' , 'freelancer_tasks');
    }
}
