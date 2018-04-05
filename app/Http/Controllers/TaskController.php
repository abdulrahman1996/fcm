<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Profile;
use App\Skill;
use App\Task;
use App\User;
use DB;
use App\Reposities\TaskRepo;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function create()
    {
        $this->validate(request(), [
            'name' => 'required ',
            'descreption' => 'required ',
            'budjet' => 'required |numeric',
             'skills' =>'required'

        ]);

       $task =new Task();
         $task->employer_id = auth()->user()->id;
         $task->name = \request('name');
         $task->descreption  = \request('descreption');
         $task->budjet = \request('budjet');
         $task->save();
       echo  "this is skill id";

           foreach (\request('skills') as $skill_id)
           $task->skills()->attach($skill_id);


       return redirect('home');



    }
    public function show()
    {
        return View('task.taskS');
    }
    public function get($id)
    {
        $task = Task::find($id);
        $taskRepo = new TaskRepo();
        $offersData = $taskRepo->taskOffers($id);
        echo count($offersData);
        return View('task.tasksOffers' , ['offersData'=>$offersData  ,  'task'=>$task]);
    }
    public function all()
    {
        $tasks = new TaskRepo();

      return  response()->json($tasks->all());
    }
    public function getRate($profile_id)
    {
        $profile = Profile::find($profile_id);
        $profile_rate = $profile->rate;
        return $profile_rate;
    }
}
