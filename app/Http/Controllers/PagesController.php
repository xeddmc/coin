<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function services()
    {
        if (Auth::user()) {
            $user = Auth::user();
            return view('services')->with('user', $user);
        } else {
            return view('services');
        }
    }
}
