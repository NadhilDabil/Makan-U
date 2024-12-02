<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('role')->insert([
            ['role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Mahasiswa', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Penjual', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
