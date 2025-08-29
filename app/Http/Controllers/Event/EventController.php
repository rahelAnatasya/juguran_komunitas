<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 'active')->get();
        
        return view('dashboard.menu.event.index', [
            'title' => 'Semua Acara',
            'events' => $events
        ]);
    }
}
