<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home() {
        return view( 'home' );
    }

    public function ric_home() {
        return view('club.ric.home');
    }
}
