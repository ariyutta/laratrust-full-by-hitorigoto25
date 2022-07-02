<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        if(Auth::user()->hasRole('user')) {

            return view('users.index');
        }
        else if(Auth::user()->hasRole('administrator')) {

            return view('admins.index');
        }
        else if(Auth::user()->hasRole('developer')) {

            return view('developers.index');
        }
    }
}