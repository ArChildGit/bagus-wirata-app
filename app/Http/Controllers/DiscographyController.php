<?php

namespace App\Http\Controllers;

use App\Models\Discography;
use Illuminate\Http\Request;

class DiscographyController extends Controller
{
    // Admin CRUD
    public function index()
    {
        $discographies = Discography::all();
        return view('admin.discographies.index', compact('discographies'));
    }

    public function create()
    {
        $albums = \App\Models\Album::all(); // ambil semua album
        return view('admin.discographies.create', compact('albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:10240', // 10MB
            'audio' => 'required|mimes:mp3,wav|max:20480', // 20MB
            'release_date' => 'nullable|date',
            'album_id' => 'nullable|exists:albums,id', // ✅ tambahkan ini
        ]);

        $image = $request->file('image')->store('discography/images', 'public');
        $audio = $request->file('audio')->store('discography/audio', 'public');

        Discography::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $image,
            'audio_path' => $audio,
            'release_date' => $request->release_date,
            'album_id' => $request->album_id, // ✅ tambahkan ini
        ]);

        return redirect()->route('admin.discographies.index')
            ->with('success', 'Discography berhasil ditambahkan!');
    }

    public function edit(Discography $discography)
    {
        $albums = \App\Models\Album::all();
        return view('admin.discographies.edit', compact('discography', 'albums'));
    }

    public function update(Request $request, Discography $discography)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
            'audio' => 'nullable|mimes:mp3,wav|max:20480',
            'release_date' => 'nullable|date',
            'album_id' => 'nullable|exists:albums,id', // ✅ tambahkan ini
        ]);

        if ($request->hasFile('image')) {
            $discography->image_path = $request->file('image')->store('discography/images', 'public');
        }

        if ($request->hasFile('audio')) {
            $discography->audio_path = $request->file('audio')->store('discography/audio', 'public');
        }

        $discography->title = $request->title;
        $discography->description = $request->description;
        $discography->release_date = $request->release_date;
        $discography->album_id = $request->album_id; // ✅ tambahkan ini
        $discography->save();

        return redirect()->route('admin.discographies.index')
            ->with('success', 'Discography berhasil diperbarui!');
    }


    public function destroy(Discography $discography)
    {
        $discography->delete();
        return redirect()->route('admin.discographies.index')
            ->with('success', 'Discography berhasil dihapus!');
    }

    // Public
    public function publicIndex()
    {
        $discographies = Discography::latest()->paginate(10);
        return view('discographies.index', compact('discographies'));
    }

    public function show(Discography $discography)
    {
        return view('discographies.show', compact('discography'));
    }
}
