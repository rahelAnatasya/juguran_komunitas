<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JoinedEventController extends Controller
{
    public function index()
    {
        return view('dashboard.menu.joined.index', [
            'title' => 'Acara yang Kamu Ikuti'
        ]);
    }
}
