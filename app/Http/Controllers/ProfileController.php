<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id){
        $user=User::whereid($id)->first();
        if($user){
            return view('profile')->withUser('$user');
        } else{
            dd($user);
        }

    }
}
