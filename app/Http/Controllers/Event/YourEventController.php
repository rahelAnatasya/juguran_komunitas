<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YourEventController extends Controller
{
    public function index()
    {
        return view('dashboard.menu.your-event.index', [
            'title' => 'Acara Kamu'
        ]);
    }
}
