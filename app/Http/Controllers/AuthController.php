<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewIndex()
    {
        return view('dashboard');
    }


    public function viewRegister(){
        return view('register/role');
    }


    public function indexMahasiswa()
    {
        return view('register/register-mahasiswa');
    }


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

        return redirect()->route('login');
    }

    public function indexPenjual()
    {
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
        return redirect()->route('login');
    }


    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            if(Auth::check() && Auth::user()->id_role = 3){
                if(Auth::user()->toko){
                    return redirect()->route('view.toko');
                }else {
                    return redirect()->route('view.form.penjual');
                }
            }

            return redirect()->route('view.index');
        } else {
            return redirect()->back()->with('error', 'GAGAL LOGIN');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    public function viewMahasiswa(){
        return view('view-mahasiswa');
    }

    public function viewPenjual(){
        return view('view-Penjual');
    }

    public function destroy(string $id)
    {
        //
    }
}
