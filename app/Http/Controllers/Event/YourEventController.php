<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class YourEventController extends Controller
{
    public function index()
    {
        $events = Event::where('user_id', auth()->id())->get();
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
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after_or_equal:start_time',
            'name_location' => 'required|string|max:255',
            'link_location' => 'required|url',
            'description' => 'required|string',
            'coupon_code' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:online,offline',
            'mode' => 'required|in:paid,free',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $validated['user_id'] = auth()->id();

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $validated['image_path'] = $imagePath;
        }

        Event::create($validated);

        return redirect()->route('your-event')->with('success', 'Acara berhasil ditambahkan!');
    }

    public function show(Event $event)
    {
        // Authorize user can view this event
        Gate::authorize('view', $event);

        return view('dashboard.menu.your-event.show', [
            'title' => 'Detail Acara',
            'event' => $event
        ]);
    }

    public function edit(Event $event)
    {
        // Authorize user can update this event
        Gate::authorize('update', $event);

        return view('dashboard.menu.your-event.edit', [
            'title' => 'Edit Acara',
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event)
    {
        // Authorize user can update this event
        Gate::authorize('update', $event);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after_or_equal:start_time',
            'name_location' => 'required|string|max:255',
            'link_location' => 'required|url',
            'description' => 'required|string',
            'coupon_code' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:online,offline',
            'mode' => 'required|in:paid,free',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle image removal
        if ($request->has('remove_image')) {
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
                $validated['image_path'] = null;
            }
        }

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
            }
            
            $imagePath = $request->file('image')->store('events', 'public');
            $validated['image_path'] = $imagePath;
        }

        $event->update($validated);

        return redirect()->route('your-event')->with('success', 'Acara berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        // Authorize user can delete this event
        Gate::authorize('delete', $event);

        // Delete associated image
        if ($event->image_path) {
            Storage::disk('public')->delete($event->image_path);
        }

        $event->delete();

        return redirect()->route('your-event')->with('success', 'Acara berhasil dihapus!');
    }
}
