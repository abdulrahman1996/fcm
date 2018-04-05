<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show($username)
    {
        $profile = new Profile();
        $profileData = $profile->showByUsername($username);
        session(['username'=>$profileData->username  , 'image'=>$profileData->image , 'email'=>$profileData->email] ,'');


          return  View('employer.em_profile' , ['profileData'=>$profileData]);



    }
}
