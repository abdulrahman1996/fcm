<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consumerUser extends Model
{

    protected $fillable = [
        'user_id', 'birh_date', 'country'
    ];
    public function store( $user_id ,  $birth_date , $country   , $role_id)
    {

       $this->create(["user_id"=> $user_id   , "country" =>$country  ,  "birh_date"=>$birth_date]);
       $this->addToRole($role_id , $user_id );

    }


    public function addToRole($role_id , $user_id)
    {
        echo $this->user_id;
        if($role_id ==2)
        {
            employer::create(["user_id" =>$user_id]);
        }
        else  {
            freelancer::create(["user_id" =>$user_id]);
        }
    }

}
