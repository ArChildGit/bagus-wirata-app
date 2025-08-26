<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Admin CRUD
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:10240',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
        ]);

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery berhasil ditambahkan!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery', 'public');
            $gallery->image_path = $path;
        }

        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->save();

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery berhasil diperbarui!');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery berhasil dihapus!');
    }

    // Public
    public function publicIndex()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('galleries.index', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }
}
