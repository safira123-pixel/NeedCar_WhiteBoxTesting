<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = array('title' => 'Admin Homepage');
        return view('dashboard.index', $data);
    }

    public function profile() {
        $data = array('title' => 'Admin Profile');
        return view('dashboard.profile', $data);
    }
}
