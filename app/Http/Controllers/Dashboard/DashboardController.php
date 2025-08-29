<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $now = Carbon::now();

        // Acara Kamu - Event yang dibuat oleh user yang login
        $yourEvents = Event::where('user_id', auth()->id())
            ->where('status', 'active')
            ->orderBy('from_date', 'desc')
            ->paginate(6, ['*'], 'your_events_page');

        $allEventsCount = Event::where('status', 'active')->count();

        // Acara Akan Datang - Event dengan tanggal mulai > sekarang
        $upcomingEvents = Event::where('status', 'active')
            ->where('from_date', '>', $now)
            ->orderBy('from_date', 'asc')
            ->paginate(6, ['*'], 'upcoming_events_page');

        // Acara Sedang Berlangsung - Event yang berlangsung saat ini
        $ongoingEvents = Event::where('status', 'active')
            ->where('from_date', '<=', $now)
            ->where(function ($query) use ($now) {
                $query->where('to_date', '>=', $now)
                    ->orWhereNull('to_date');
            })
            ->orderBy('from_date', 'desc')
            ->paginate(6, ['*'], 'ongoing_events_page');

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'yourEvents' => $yourEvents,
            'upcomingEvents' => $upcomingEvents,
            'ongoingEvents' => $ongoingEvents,
            'allEventsCount' => $allEventsCount
        ]);
    }
}
