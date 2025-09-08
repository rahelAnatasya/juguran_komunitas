<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
  public function index()
  {
    $now = Carbon::now();

    // Total Acara - Semua acara aktif
    $totalEvents = Event::where('status', 'active')->count();

    // Acara Akan Datang - Event dengan tanggal mulai > sekarang
    $upcomingEventsCount = Event::where('status', 'active')
        ->where('from_date', '>', $now)
        ->count();

    // Acara Sedang Berlangsung - Event yang berlangsung saat ini
    $ongoingEventsCount = Event::where('status', 'active')
        ->where('from_date', '<=', $now)
        ->where(function ($query) use ($now) {
            $query->where('to_date', '>=', $now)
                ->orWhereNull('to_date');
        })
        ->count();

    // Acara Selesai - Event yang sudah selesai
    $completedEventsCount = Event::where('status', 'active')
        ->where('to_date', '<', $now)
        ->count();

    return view("profile.index", [
      "title" => "Profile",
      "user" => Auth::user(),
      "totalEvents" => $totalEvents,
      "upcomingEventsCount" => $upcomingEventsCount,
      "ongoingEventsCount" => $ongoingEventsCount,
      "completedEventsCount" => $completedEventsCount
    ]);
  }

  public function update(Request $request)
  {
    $user = Auth::user();
    
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
      'phone' => 'required|string|max:20',
      'institution' => 'required|string|max:255'
    ]);

    $user->update([
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'institution' => $request->institution
    ]);

    return redirect()->route('profile')->with('success', 'Profile berhasil diupdate!');
  }

  public function changePassword(Request $request)
  {
    $request->validate([
      'current_password' => 'required',
      'new_password' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();

    // Check current password
    if (!\Hash::check($request->current_password, $user->password)) {
      return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
    }

    // Update password
    $user->update([
      'password' => \Hash::make($request->new_password)
    ]);

    return redirect()->route('profile')->with('success', 'Password berhasil diubah!');
  }

  public function deleteAccount(Request $request)
  {
    $request->validate([
      'password' => 'required',
    ]);

    $user = Auth::user();

    // Verify password
    if (!\Hash::check($request->password, $user->password)) {
      return back()->withErrors(['password' => 'Password tidak sesuai']);
    }

    // Logout user first
    Auth::logout();

    // Delete user account
    $user->delete();

    return redirect()->route('homepage')->with('success', 'Akun berhasil dihapus. Selamat tinggal!');
  }
}
