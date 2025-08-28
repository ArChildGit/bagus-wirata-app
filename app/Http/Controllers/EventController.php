<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function publicIndex()
    {
        $events = Event::latest()->paginate(10);
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'poster' => 'nullable|image|max:10240', // ✅ tambahkan validasi poster
        ]);

        $posterPath = $request->hasFile('poster') 
            ? $request->file('poster')->store('events/posters', 'public') 
            : null;

        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'user_id' => auth()->id(),
            'poster_path' => $posterPath, // ✅ simpan path poster
        ]);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event berhasil ditambahkan!');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'poster' => 'nullable|image|max:10240', // ✅ validasi poster
        ]);

        if ($request->hasFile('poster')) {
            $event->poster_path = $request->file('poster')->store('events/posters', 'public');
        }

        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'user_id' => auth()->id(),
            'poster_path' => $event->poster_path, // ✅ update path poster jika ada
        ]);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Event berhasil dihapus!');
    }

    public function show(Event $event)
    {
        $event->load(['comments.user']);
        return view('events.show', compact('event'));
    }
}
