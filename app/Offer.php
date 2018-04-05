<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
       'freelancer_id' , 'price' , 'task_id' , 'timeNeeded'
    ];
}
