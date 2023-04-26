<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Request\RegisterRequest;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users_index',['users'=>$users]); 
    }

    public function create(Request $request)
    {
       return view('users_create');
    }

    function guardar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required' ,
            'password' => 'required'
        ]); 

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
   
        $user->save();
        return view('users_index');
    }
}
