<?php

namespace App\Http\Controllers;

use App\consumerUser;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create (Request $request)
    {
       return View('register');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required | unique:users',
            'email' => 'required|email |unique:users',
            'password' => 'required| min:3'
        ]);

        $user = User::create(request(['name' , 'email' , 'password' , 'role_id']));
        $cUser = new consumerUser();
        // store consimer user
        $user_id = $user->id;
        $cUser->store($user_id ,\request('birth_date') , \request("country") , \request('role_id'));

        $userProfile = new Profile();
        $userProfile->image='\ProfilePhoto\default';
        $userProfile->user_id=$user_id;
        $userProfile->save();
        //login
        auth()->login($user);
        // redirect
        return redirect('/home');


    }
}
