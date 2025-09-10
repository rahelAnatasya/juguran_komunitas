<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');
        $searchQuery = $request->input('q', '');

        $events = Event::where('status', 'active')
            ->when($filter === 'upcoming', function ($query) {
                $query->where('from_date', '>', now());
            })
            ->when($filter === 'ongoing', function ($query) {
                $query->where('from_date', '<=', now())
                      ->where(function ($q) {
                          $q->whereNull('to_date')
                            ->orWhere('to_date', '>=', now());
                      });
            })
            ->when($filter === 'completed', function ($query) {
                $query->whereNotNull('to_date')
                      ->where('to_date', '<', now());
            })
            ->when(!empty($searchQuery), function ($query) use ($searchQuery) {
                $query->where(function ($q) use ($searchQuery) {
                    $q->where('title', 'like', '%' . $searchQuery . '%')
                      ->orWhere('name_location', 'like', '%' . $searchQuery . '%')
                      ->orWhere('description', 'like', '%' . $searchQuery . '%');
                });
            })
            ->get();
        
        return view('dashboard.menu.event.index', [
            'title' => $this->getTitle($filter, $searchQuery),
            'events' => $events,
            'searchQuery' => $searchQuery,
            'currentFilter' => $filter
        ]);
    }

    public function search(Request $request)
    {
        $filter = $request->input('filter', 'all');
        $searchQuery = $request->input('q', '');

        $events = Event::where('status', 'active')
            ->when($filter === 'upcoming', function ($query) {
                $query->where('from_date', '>', now());
            })
            ->when($filter === 'ongoing', function ($query) {
                $query->where('from_date', '<=', now())
                      ->where(function ($q) {
                          $q->whereNull('to_date')
                            ->orWhere('to_date', '>=', now());
                      });
            })
            ->when($filter === 'completed', function ($query) {
                $query->whereNotNull('to_date')
                      ->where('to_date', '<', now());
            })
            ->where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', '%' . $searchQuery . '%')
                      ->orWhere('name_location', 'like', '%' . $searchQuery . '%')
                      ->orWhere('description', 'like', '%' . $searchQuery . '%');
            })
            ->get();
        
        return view('dashboard.menu.event.index', [
            'title' => $this->getTitle($filter, $searchQuery),
            'events' => $events,
            'searchQuery' => $searchQuery,
            'currentFilter' => $filter
        ]);
    }

    private function getTitle($filter, $searchQuery)
    {
        $titles = [
            'all' => 'Semua Acara',
            'upcoming' => 'Acara Akan Datang',
            'ongoing' => 'Acara Sedang Berlangsung',
            'completed' => 'Acara Selesai'
        ];

        $title = $titles[$filter] ?? 'Semua Acara';
        
        if (!empty($searchQuery)) {
            return 'Hasil Pencarian: ' . $searchQuery . ' (' . $title . ')';
        }
        
        return $title;
    }
}
