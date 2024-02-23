<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'admin_satu',
            'role' => 'administrator',
            'verifikasi' => 'sudah',
            'alamat' => 'subang'
        ]);

        User::create([
            'username' => 'petugas1',
            'email' => 'petugas1@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'cica_purnamasari',
            'role' => 'petugas',
            'verifikasi' => 'sudah',
            'alamat' => 'dangder'
        ]);

        User::create([
            'username' => 'peminjam1',
            'email' => 'peminjam1@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'cica_purnamasari',
            'role' => 'peminjam',
            'verifikasi' => 'sudah',
            'alamat' => 'bandung'
        ]);
    }
}

