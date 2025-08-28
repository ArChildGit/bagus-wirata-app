<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // ------------------------------
    // ADMIN METHODS
    // ------------------------------

    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $albums = Album::all();
        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource (Admin).
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage (Admin).
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover' => 'nullable|image|max:10240', // 10MB
            'release_date' => 'nullable|date',
        ]);

        $cover = $request->hasFile('cover') ? $request->file('cover')->store('albums/covers','public') : null;

        Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'cover_path' => $cover,
            'release_date' => $request->release_date,
        ]);

        return redirect()->route('admin.albums.index')
            ->with('success','Album berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource (Admin).
     */
    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage (Admin).
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover' => 'nullable|image|max:10240',
            'release_date' => 'nullable|date',
        ]);

        if ($request->hasFile('cover')) {
            $album->cover_path = $request->file('cover')->store('albums/covers','public');
        }

        $album->title = $request->title;
        $album->description = $request->description;
        $album->release_date = $request->release_date;
        $album->save();

        return redirect()->route('admin.albums.index')
            ->with('success','Album berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage (Admin).
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('admin.albums.index')
            ->with('success','Album berhasil dihapus!');
    }

    // ------------------------------
    // PUBLIC METHODS
    // ------------------------------

    /**
     * Display a listing of the resource (Public).
     */
    public function publicIndex()
    {
        $albums = Album::latest()->paginate(10);
        return view('albums.index', compact('albums'));
    }

    /**
     * Display the specified resource (Public).
     */
    public function show(Album $album)
    {
        $album->load('tracks'); // Pastikan relasi tracks() di model Album ada
        return view('albums.show', compact('album'));
    }
}
