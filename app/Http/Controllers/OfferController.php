<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function applyOffer()
    {
        Offer::create(\request(['task_id' , 'price'  , 'freelancer_id'  , 'timeNeeded' ]));
    }
}
