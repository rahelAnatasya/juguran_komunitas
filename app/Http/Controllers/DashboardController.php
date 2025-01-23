<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('menu.dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
}
