<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'rate', 'amount', 'image','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function showByUsername($username)
    {
       return DB::
       table('users')->select('profiles.description  as des','users.name as username' , 'profiles.image as image' , 'profiles.rate as rate' , 'users.email')
           ->where('users.name' , '=' , $username)
           ->join('profiles' , 'profiles.user_id' , '=', 'users.id')->first();

    }
}
