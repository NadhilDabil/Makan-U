<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{

    public function indexNotifikasi(){
        $notifikasi = Promo::where('id_promo', Auth::id())->first();
        return view('dashboard', compact('notifikasi'));
    }
    // public function index()
    // {
    //     $user = auth()->user();
    //     $notifications = $user->notifications; // Semua notifikasi

    //     return view('notifications.index', compact('notifications'));
    // }

    // // Menandai notifikasi sebagai sudah dibaca
    // public function markAsRead($id)
    // {
    //     $user = auth()->user();
    //     $notification = $user->notifications()->find($id);

    //     if ($notification) {
    //         $notification->markAsRead();
    //     }

    //     return redirect()->back()->with('success', 'Notifikasi telah dibaca!');
    // }
}
