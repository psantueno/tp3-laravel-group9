<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan.perez@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Maria Lopez',
            'email' => 'maria.lopez@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Carlos Gomez',
            'email' => 'carlos.gomez@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
