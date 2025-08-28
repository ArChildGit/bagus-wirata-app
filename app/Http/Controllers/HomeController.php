<?php

namespace App\Http\Controllers;

use App\Models\Discography;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 discography terbaru untuk homepage
        $discographies = Discography::latest()->take(3)->get();
        // Ambil 3 event terbaru
        $events = Event::latest()->take(3)->get();

        // Kirim ke welcome view
        return view('welcome', compact('discographies', 'events'));
    }
}
