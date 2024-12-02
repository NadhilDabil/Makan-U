<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewIndex(){
        return view('index');

    }


    public function indexMahasiswa()
    {
        return view('register/register-mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storeMahasiswa(request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:20',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
        ]);

        $user = new User();
        $user->id_role = 2;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;
        $user->save();

        return redirect()->route('loginn');
    }

    public function indexPenjual() {
        return view('register.register-penjual');
    }

    public function storePenjual(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:20',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
        ]);

        $user = new User();
        $user->id_role = 3;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;

        $user->save();
        return redirect()->route('loginn');
    }


    public function login(Request $request){
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('view.index');
        }else{
            return redirect()->back()->with('error', 'GAGAL LOGIN');
        }


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
