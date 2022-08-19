<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {

        if(Auth::user()->hasRole('administrator')) {

            Alert::success('Berhasil', 'Berhasil Sebagai Admin!');
            return view('admins.index');
        }
        else if(Auth::user()->hasRole('user')) {

            Alert::success('Berhasil', 'Berhasil Sebagai User!');
            return view('users.index');
        }
    }
}
