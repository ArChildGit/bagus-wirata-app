<?php

namespace App\Http\Controllers;

use App\Models\Discography;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 discography berdasarkan release_date terbaru
        $discographies = Discography::whereNotNull('release_date')
            ->orderBy('release_date', 'desc')
            ->take(3)
            ->get();

        // Ambil 3 event terbaru berdasarkan tanggal event
        $events = Event::orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('welcome', compact('discographies', 'events'));
    }
}
