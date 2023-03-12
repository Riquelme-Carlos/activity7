<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombreUsuario'=> 'Admon',
            'email' => 'admon@robotics.com',
            'password' => 'Adm@2022',
            'rol' => 'Administrativo'
        ]);

        DB::table('Usuarios')->insert([
            'nombreUsuario' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => 'Adm@2022 ',
            'rol' => 'Profesor'
        ]);

        DB::table('Usuarios')->insert([
            'nombreUsuario' => 'Estudiante',
            'email' => 'student@robotics.com',
            'password' => 'Adm@2022',
            'rol' => 'Estudiante'
        ]);
    }
}
