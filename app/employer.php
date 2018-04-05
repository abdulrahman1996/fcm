<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id'
    ];
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
