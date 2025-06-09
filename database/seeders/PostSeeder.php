<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => '¿Por qué el número pi es tan especial?',
            'content' => 'El número π (pi) es una de las constantes matemáticas más famosas. Representa la relación entre la circunferencia de un círculo y su diámetro, y su valor es aproximadamente 3.14159... aunque en realidad tiene infinitas cifras decimales no periódicas. Desde la antigüedad, matemáticos de diversas culturas han intentado calcularlo con precisión. Hoy, pi aparece no solo en geometría, sino también en áreas como probabilidades, teoría de números y física. ¡Incluso tiene su propio día internacional el 14 de marzo!',
            'type' => 'Curiosidad',
            'habilitated' => true,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => '¿Qué es una función y por qué es importante?',
            'content' => 'Una función es una relación matemática que asigna a cada elemento de un conjunto (dominio) exactamente un valor en otro conjunto (codominio). Se representa como f(x), y es fundamental en álgebra, cálculo, física, economía y muchas otras disciplinas. Las funciones permiten modelar fenómenos, describir patrones y resolver problemas complejos. Comprender funciones es clave para avanzar en cualquier área de las matemáticas.',
            'type' => 'Artículo',
            'habilitated' => true,
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Recursos gratuitos para aprender matemáticas desde cero',
            'content' => 'Aprender matemáticas nunca fue tan accesible. Existen recursos gratuitos de excelente calidad para todos los niveles. Algunos recomendados:
            * Khan Academy: Ofrece lecciones en video y ejercicios interactivos desde aritmética hasta cálculo avanzado.
            * Pauls Online Math Notes: ideal para cálculo y álgebra avanzada.
            * Geogebra: visualización interactiva de funciones, geometría y estadísticas. Estos sitios son útiles tanto para estudiantes como para docentes y entusiastas.',
            'type' => 'Recurso',
            'habilitated' => true,
            'user_id' => 3,
        ]);
    }
}
