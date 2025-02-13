<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $events = [
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => 'Expired',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => 'Expired',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => 'Expired',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => '',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => '',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
            [
                'title' => 'Juguran Komunitas - Transform Your Design Skills',
                'date' => 'Januari 25, 2025',
                'location' => 'Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas',
                'status' => '',
                'image' => asset('assets/images/poster-januari-2025.jpg')
            ],
        ];

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