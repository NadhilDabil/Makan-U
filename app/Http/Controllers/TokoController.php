<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokoController extends Controller
{

    public function viewForm()
    {
        return view('penjual/view-form-toko');
    }

    public function viewToko()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $toko = Toko::where('id_user', Auth::id())->first();

        return view('penjual.view-toko', compact('toko'));
    }


    public function storeToko(Request $request)
    {

        if (Toko::where('id_user', auth::id())->exists()) {
            return redirect()->back()->with('error', 'Anda sudah memiliki toko!');
        }

        $toko = new Toko();
        $toko->id_user = auth::id();
        $toko->nama_toko = $request->nama_toko;
        $toko->alamat_toko = $request->alamat_toko;

        if ($request->hasFile('image_toko')) {
            $path = $request->file('image_toko')->store('images/toko', 'public');
            $toko->image_toko = $path;
        }

        if ($request->hasFile('image_utama')) {
            $path = $request->file('image_utama')->store('images/utama', 'public');
            $toko->image_utama = $path;
        }

        $toko->waktu_operasional_buka = $request->waktu_operasional_buka;
        $toko->waktu_operasional_tutup = $request->waktu_operasional_tutup;
        $toko->lokasi_toko = $request->lokasi_toko;

        $toko->save();
        
        return redirect()->route('view.toko');
    }

    public function viewEditToko()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $toko = Toko::where('id_user', Auth::id())->first();

        return view('penjual/view-form-toko-edit', compact('toko'));
    }

    public function updateToko(Request $request)
    {
        // Pastikan pengguna telah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil data toko milik pengguna
        $toko = Toko::where('id_user', Auth::id())->first();

        if (!$toko) {
            return redirect()->route('view.toko')->with('error', 'Toko tidak ditemukan.');
        }

        // Validasi input
        // $request->validate([
        //     'nama_toko' => 'required|string|max:255',
        //     'alamat_toko' => 'required|string|max:500',
        //     'image_toko' => 'nullable|image|mimes:jpeg,png,jpg',
        //     'image_utama' => 'nullable|image|mimes:jpeg,png,jpg',
        //     'waktu_operasional_buka' => 'required|date_format:H:i',
        //     'waktu_operasional_tutup' => 'required|date_format:H:i|after:waktu_operasional_buka',
        //     'lokasi_toko' => 'required|string|max:255',
        // ]);

        // Update data toko
        $toko->nama_toko = $request->nama_toko;
        $toko->alamat_toko = $request->alamat_toko;

        // Update gambar toko jika ada
        if ($request->hasFile('image_toko')) {
            $path = $request->file('image_toko')->store('images/toko', 'public');
            $toko->image_toko = $path;
        }

        // Update gambar utama jika ada
        if ($request->hasFile('image_utama')) {
            $path = $request->file('image_utama')->store('images/utama', 'public');
            $toko->image_utama = $path;
        }

        $toko->waktu_operasional_buka = $request->waktu_operasional_buka;
        $toko->waktu_operasional_tutup = $request->waktu_operasional_tutup;
        $toko->lokasi_toko = $request->lokasi_toko;

        $toko->save();

        return redirect()->route('view.toko')->with('success', 'Data toko berhasil diperbarui.');
    }

    public function destroy(string $id)
{
    // Pastikan pengguna telah login
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    }

    // Cari toko berdasarkan id_toko dan pastikan toko tersebut milik pengguna yang sedang login
    $toko = Toko::where('id_toko', $id)->where('id_user', Auth::id())->first();

    // Jika toko tidak ditemukan, tampilkan pesan error
    if (!$toko) {
        return redirect()->route('view.toko')->with('error', 'Toko tidak ditemukan atau Anda tidak memiliki izin untuk menghapus toko ini.');
    }

    // Hapus data toko dari database
    $toko->delete();

    // Redirect ke halaman daftar toko dengan pesan sukses
    return redirect()->route('view.toko')->with('success', 'Toko berhasil dihapus.');
}

}
