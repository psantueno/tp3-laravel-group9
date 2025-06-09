<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commentary;

class CommentarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commentary::create([
            'username' => 'Juan Perez',
            'email' => 'juan.perez@gmail.com',
            'content' => '¡Me encantó la explicación de integrales! 👏'
        ]);

        Commentary::create([
            'username' => 'Maria Lopez',
            'email' => 'maria.lopez@gmail.com',
            'content' => 'Muy claro el ejemplo de derivadas. ¡Gracias por compartir!'
        ]);

        Commentary::create([
            'username' => 'Carlos Gomez',
            'email' => 'carlos.gomez@gmai.com',
            'content' => 'Sería genial una guía para resolver ecuaciones diferenciales.'
        ]);
    }
}
