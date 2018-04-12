<?php
/**
 * Created by PhpStorm.
 * User: asus pc
 * Date: 3/4/2018
 * Time: 11:29 PM
 */


namespace App\Reposities;

use App\Offer;
use  App\Task ;
use DB;
class TaskRepo
{
    public  function all(){
       return DB::
       table('tasks')
                ->select('tasks.id' , 'profiles.rate' , 'tasks.descreption' , 'tasks.name as name' , 'profiles.image' , 'users.name as em_name' ,'users.email' )
                ->join('users' , 'tasks.employer_id' , '=' , 'users.id')
                ->join('profiles' , 'profiles.user_id' , '=' , 'users.id')->get();

    }
    public function taskOffers($taskId)
    {

        return DB::table('offers')
            ->select('profiles.id as profile_id','consumer_users.country','freelancers.reviews','offers.timeNeeded' , 'offers.price', 'offers.timeNeeded','users.name as fl_name' ,'profiles.rate' , 'profiles.image as img' , 'consumer_users.country'  )
            ->where('offers.task_id' , '='  , $taskId)
            ->join('freelancers' , 'freelancers.id'  , '=' , 'offers.freelancer_id')
            ->join('users'  , 'users.id' , '=' , 'freelancers.id')
            ->join('consumer_users'  , 'consumer_users.user_id' , '='  , 'freelancers.id')
            ->join('profiles'  , 'profiles.id' ,'=' ,'freelancers.profile_id')->get();


    }
}