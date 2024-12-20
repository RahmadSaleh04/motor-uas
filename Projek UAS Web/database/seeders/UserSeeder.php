<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Admin
        User::create([
            'name' => 'Admin Bengkel',
            'email' => 'admin@bengkel.com',
            'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
            'role' => 'admin',
            'phone' => '081234567890',
        ]);

        // Membuat Mekanik
        User::create([
            'name' => 'Mekanik A',
            'email' => 'mekanik_a@bengkel.com',
            'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
            'role' => 'mekanik',
            'phone' => '081234567891',
        ]);

        User::create([
            'name' => 'Mekanik B',
            'email' => 'mekanik_b@bengkel.com',
            'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
            'role' => 'mekanik',
            'phone' => '081234567892',
        ]);

        User::create([
            'name' => 'Mekanik C',
            'email' => 'mekanik_c@bengkel.com',
            'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
            'role' => 'mekanik',
            'phone' => '081234567893',
        ]);

        // Membuat User Biasa
        User::create([
            'name' => 'Frezy Ananta',
            'email' => 'kodok@bengkel.com',
            'password' => Hash::make('kodok123'), // Ganti password sesuai kebutuhan
            'role' => 'user',
            'phone' => '081112223334',
        ]);

        User::create([
            'name' => 'Rahmad',
            'email' => 'rahmad@bengkel.com',
            'password' => Hash::make('rahmad123'), // Ganti password sesuai kebutuhan
            'role' => 'user',
            'phone' => '081112223334',
        ]);

        User::create([
            'name' => 'Ramizah',
            'email' => 'ijah@bengkel.com',
            'password' => Hash::make('ijah1234'), // Ganti password sesuai kebutuhan
            'role' => 'user',
            'phone' => '081112223334',
        ]);
    }
}
