<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class YourEventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        return view('dashboard.menu.your-event.index', [
            'title' => 'Acara Kamu',
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('dashboard.menu.your-event.create', [
            'title' => 'Buat Acara Baru'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'name_location' => 'required|string|max:255',
            'link_location' => 'required|url',
            'description' => 'required|string',
            'coupon_code' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:online,offline',
            'mode' => 'required|in:paid,free'
        ]);

        Event::create($validated);

        return redirect()->route('your-event')->with('success', 'Acara berhasil ditambahkan!');
    }

    public function edit(Event $event)
    {
        return view('dashboard.menu.your-event.edit', [
            'title' => 'Edit Acara',
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'name_location' => 'required|string|max:255',
            'link_location' => 'required|url',
            'description' => 'required|string',
            'coupon_code' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:online,offline',
            'mode' => 'required|in:paid,free'
        ]);

        $event->update($validated);

        return redirect()->route('your-event')->with('success', 'Acara berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('your-event')->with('success', 'Acara berhasil dihapus!');
    }
}
