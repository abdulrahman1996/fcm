<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class skillController extends Controller
{
    public function get(){
        return response()->json(Skill::all() , 200);
    }
}
