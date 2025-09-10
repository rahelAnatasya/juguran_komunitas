<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class HomepageController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');

        // Ambil event aktif dari database dengan filter
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
            ->orderBy('from_date', 'desc')
            ->take(6)
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'date' => $event->getFormattedDateRange(),
                    'location' => $event->name_location,
                    'status' => $event->getStatusText(),
                    'image' => $event->getImageUrl()
                ];
            })
            ->toArray();

        $features = [
            [
                'icon' => asset('assets/images/icon/connection.svg'),
                'title' => 'Meningkatkan Koneksi',
                'description' => 'Perluas Jaringan dan temui orang-orang dengan minat yang sama'
            ],
            [
                'icon' => asset('assets/images/icon/experience.svg'),
                'title' => 'Berbagi Pengalaman',
                'description' => 'Bagikan perjalanan dan pelajaran berharga yang bisa menginspirasi.'
            ],
            [
                'icon' => asset('assets/images/icon/insight.svg'),
                'title' => 'Wawasan Baru',
                'description' => 'Dapatkan wawasan baru dari sudut pandang yang berbeda dan unik.'
            ],
            [
                'icon' => asset('assets/images/icon/support.svg'),
                'title' => 'Dukungan Positif',
                'description' => 'Temukan dukungan dan motivasi untuk berkembang bersama secara positif.'
            ]
        ];

        $titles = [
            'all' => 'Acara Seru yang Akan Datang',
            'upcoming' => 'Acara Akan Datang',
            'ongoing' => 'Acara Sedang Berlangsung',
            'completed' => 'Acara Selesai'
        ];

        return view('homepage.index', [
            'title' => 'Juguran Komunitas',
            'events' => $events,
            'features' => $features,
            'currentFilter' => $filter,
            'sectionTitle' => $titles[$filter] ?? 'Acara Seru yang Akan Datang'
        ]);
    }
    public function detail(Event $event)
    {
        // Validasi bahwa event aktif
        if ($event->status !== 'active') {
            abort(404);
        }

        return view('homepage.detail', [
            'title' => $event->title,
            'event' => $event
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('q', '');
        
        // Redirect ke halaman all events dengan parameter search
        return redirect()->route('homepage.all-events-search', ['q' => $searchQuery]);
    }

    public function allEventsSearch(Request $request)
    {
        $searchQuery = $request->input('q', '');
        $filter = $request->input('filter', 'all');

        // Ambil event aktif dari database dengan filter search dan pagination
        $events = Event::where('status', 'active')
            ->where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', '%' . $searchQuery . '%')
                      ->orWhere('name_location', 'like', '%' . $searchQuery . '%')
                      ->orWhere('description', 'like', '%' . $searchQuery . '%');
            })
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
            ->orderBy('from_date', 'desc')
            ->paginate(6) // 6 items per page
            ->through(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'date' => $event->getFormattedDateRange(),
                    'location' => $event->name_location,
                    'status' => $event->getStatusText(),
                    'image' => $event->getImageUrl()
                ];
            });

        $features = [
            [
                'icon' => asset('assets/images/icon/connection.svg'),
                'title' => 'Meningkatkan Koneksi',
                'description' => 'Perluas Jaringan dan temui orang-orang dengan minat yang sama'
            ],
            [
                'icon' => asset('assets/images/icon/experience.svg'),
                'title' => 'Berbagi Pengalaman',
                'description' => 'Bagikan perjalanan dan pelajaran berharga yang bisa menginspirasi.'
            ],
            [
                'icon' => asset('assets/images/icon/insight.svg'),
                'title' => 'Wawasan Baru',
                'description' => 'Dapatkan wawasan baru dari sudut pandang yang berbeda dan unik.'
            ],
            [
                'icon' => asset('assets/images/icon/support.svg'),
                'title' => 'Dukungan Positif',
                'description' => 'Temukan dukungan dan motivasi untuk berkembang bersama secara positif.'
            ]
        ];

        $titles = [
            'all' => $searchQuery ? 'Hasil Pencarian: ' . $searchQuery : 'Semua Event Juguran Komunitas',
            'upcoming' => $searchQuery ? 'Akan Datang: ' . $searchQuery : 'Event Akan Datang',
            'ongoing' => $searchQuery ? 'Sedang Berlangsung: ' . $searchQuery : 'Event Sedang Berlangsung',
            'completed' => $searchQuery ? 'Selesai: ' . $searchQuery : 'Event Selesai'
        ];

        return view('homepage.all-events', [
            'title' => $titles[$filter] ?? 'Semua Event Juguran Komunitas',
            'events' => $events,
            'features' => $features,
            'searchQuery' => $searchQuery,
            'currentFilter' => $filter
        ]);
    }

    public function allEvents(Request $request)
    {
        $filter = $request->input('filter', 'all');

        // Ambil event aktif dari database dengan filter dan pagination
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
            ->orderBy('from_date', 'desc')
            ->paginate(6) // 6 items per page
            ->through(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'date' => $event->getFormattedDateRange(),
                    'location' => $event->name_location,
                    'status' => $event->getStatusText(),
                    'image' => $event->getImageUrl()
                ];
            });

        $features = [
            [
                'icon' => asset('assets/images/icon/connection.svg'),
                'title' => 'Meningkatkan Koneksi',
                'description' => 'Perluas Jaringan dan temui orang-orang dengan minat yang sama'
            ],
            [
                'icon' => asset('assets/images/icon/experience.svg'),
                'title' => 'Berbagi Pengalaman',
                'description' => 'Bagikan perjalanan dan pelajaran berharga yang bisa menginspirasi.'
            ],
            [
                'icon' => asset('assets/images/icon/insight.svg'),
                'title' => 'Wawasan Baru',
                'description' => 'Dapatkan wawasan baru dari sudut pandang yang berbeda dan unik.'
            ],
            [
                'icon' => asset('assets/images/icon/support.svg'),
                'title' => 'Dukungan Positif',
                'description' => 'Temukan dukungan dan motivasi untuk berkembang bersama secara positif.'
            ]
        ];

        $titles = [
            'all' => 'Semua Event Juguran Komunitas',
            'upcoming' => 'Event Akan Datang',
            'ongoing' => 'Event Sedang Berlangsung',
            'completed' => 'Event Selesai'
        ];

        return view('homepage.all-events', [
            'title' => $titles[$filter] ?? 'Semua Event Juguran Komunitas',
            'events' => $events,
            'features' => $features,
            'searchQuery' => '',
            'currentFilter' => $filter
        ]);
    }

}
