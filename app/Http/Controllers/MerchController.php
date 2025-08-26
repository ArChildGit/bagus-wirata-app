<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    // Admin CRUD
    public function index() {
        $merches = Merch::all();
        return view('admin.merches.index', compact('merches'));
    }

    public function create() {
        return view('admin.merches.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:10240', // max 10MB
            'link' => 'nullable|string',
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $path = $file->storeAs('merches', $filename, 'public');

        Merch::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.merches.index')
            ->with('success', 'Merch berhasil ditambahkan!');
    }

    public function edit(Merch $merch) {
        return view('admin.merches.edit', compact('merch'));
    }

    public function update(Request $request, Merch $merch) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
            'link' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $merch->image_path = $file->storeAs('merches', $filename, 'public');
        }

        $merch->title = $request->title;
        $merch->description = $request->description;
        $merch->link = $request->link;
        $merch->save();

        return redirect()->route('admin.merches.index')
            ->with('success', 'Merch berhasil diperbarui!');
    }

    public function destroy(Merch $merch) {
        $merch->delete();
        return redirect()->route('admin.merches.index')
            ->with('success', 'Merch berhasil dihapus!');
    }

    // Public
    public function publicIndex() {
        $merches = Merch::latest()->paginate(10);
        return view('merches.index', compact('merches'));
    }

    public function show(Merch $merch) {
        return view('merches.show', compact('merch'));
    }
}
