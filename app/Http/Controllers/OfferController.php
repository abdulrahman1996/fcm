<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfferController extends Controller
{
    public function applyOffer()
    {
        Offer::create(\request(['task_id' , 'price'  , 'freelancer_id'  , 'timeNeeded' ]));
        $task = Task::find(\request('task_id'));
        $task->freelancers()->attach(session('user_id'));

    }
}
