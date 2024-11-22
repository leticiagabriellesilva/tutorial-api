<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Livro::create(['nome'=>'O corvo','autor'=>'Edgar Allan Poe', 'anoLancamento'=>1845, 'editora'=>'Companhia das Letras', 'genero'=>'Horror', 'estoque'=>10]);
        Livro::create(['nome'=>'Memórias Póstumas de Brás Cubas','autor'=>'Machado de Assis', 'anoLancamento'=>1881, 'editora'=>'Culturama', 'genero'=>'Romance', 'estoque'=>15]);
    }
}