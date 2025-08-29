<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class HomepageController extends Controller
{
    public function index()
    {
        // Ambil event aktif dari database
        $events = Event::where('status', 'active')
            ->orderBy('from_date', 'desc')
            ->get()
            ->map(function ($event) {
                return [
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

        return view('homepage.index', [
            'title' => 'Juguran Komunitas',
            'events' => $events,
            'features' => $features,
        ]);
    }
    public function detail()
    {
        return view('homepage.detail');
    }
}