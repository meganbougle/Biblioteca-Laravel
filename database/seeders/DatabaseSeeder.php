<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //      'password' => bcrypt('password')]);

       
    
        // \App\Models\Student::factory(10)->create(
        //     [
        //         'cif' => '15578C',
        //         'name' => 'Test',
        //         'last_name' => 'User',
        //         'email' => 'testy546@gmail.com',
        //         'phone'=> '1234566789'
        //     ]
        // );

        \App\Models\Career::factory()->create(
            [
                'codigo' => '1',
                'nombre' => 'Ingenieria en Sistemas',
                'descripcion' => 'Duracion 5 años'
            ]
        );

        \App\Models\Career::factory()->create(
            [
                'codigo' => '2',
                'nombre' => 'Administracion de Empresas',
                'descripcion' => 'Duracion 5 años'
            ]
        );

        \App\Models\Career::factory(10)->create(
            [
                'codigo' => '3',
                'nombre' => 'Ingenieria Industrial',
                'descripcion' => 'Duracion 5 años'
            ]
        );

        \App\Models\Career::factory(10)->create(
            [
                'codigo' => '4',
                'nombre' => 'Ingenieria Civil',
                'descripcion' => 'Duracion 5 años'
            ]
        );
    }
}
