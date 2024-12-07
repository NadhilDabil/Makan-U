<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id_user' => 1,
                'id_role' => 1, // Misal: 1 untuk admin
                'email' => 'admin@example.com',
                'no_telp' => '081234567890',
                'username' => 'admin',
                'alamat' => 'Jl. Admin No. 1',
                'password' => Hash::make('password123'), // Gunakan Hash untuk keamanan password
            ],
            [
                'id_user' => 2,
                'id_role' => 2, // Misal: 2 untuk user biasa
                'email' => 'mahasiswa@example.com',
                'no_telp' => '082345678901',
                'username' => 'mahasiswa',
                'alamat' => 'Jl. User No. 2',
                'password' => Hash::make('mahasiswa'), // Password hashed
            ],
            [
                'id_user' => 3,
                'id_role' => 3, // Misal: 2 untuk user biasa
                'email' => 'penjual@example.com',
                'no_telp' => '082345678901',
                'username' => 'penjual',
                'alamat' => 'Jl. User No. 2',
                'password' => Hash::make('penjual'), // Password hashed
            ],
        ]);
    }
}
