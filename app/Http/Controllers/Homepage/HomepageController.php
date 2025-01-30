<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage.index', [
            'title' => 'Juguran Komunitas'
        ]);
    }
    public function detail() {
        return view('homepage.detail');
    }
}
