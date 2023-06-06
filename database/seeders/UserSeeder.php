<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'nis' => '101',
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'email' => 'andi@sma404.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'nis' => '102',
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'email' => 'budi@sma404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
