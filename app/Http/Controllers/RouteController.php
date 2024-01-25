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

    public function ric_events() {
        return view('club.events');
    }
    
    public function fecpc_home() {
        return view('club.fecpc.home');
    }

    public function fecpcp_home() {
        return view('club.fecpcp.home');
    }

    public function fecsa_home() {
        return view('club.fecsa.home');
    }
}
