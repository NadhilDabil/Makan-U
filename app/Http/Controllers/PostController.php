<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [];
        return view('post.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'image_posting' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',  // Validasi file gambar
            'caption' => 'required|string|max:255',
        ]);

        // Menyimpan gambar
        $imagePath = $request->file('image_posting')->store('image_posting', 'public');

        // Menyimpan data ke database (misalnya, tabel post)
        $post = new Posting();
        $post->image = $imagePath;
        $post->caption = $request->input('caption');
        $post->save();

        return redirect()->route('post.index')->with('success', 'Post berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
