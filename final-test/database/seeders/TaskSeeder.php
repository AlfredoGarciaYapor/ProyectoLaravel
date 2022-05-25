<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title'=>'Proyecto final',
            'description'=>'terminar proyecto laravel',
            'dueDate'=> '2022-05-25',
            'status'=>'en proceso'
        ]);
        DB::table('tasks')->insert([
            'title'=>'Modelar Troca',
            'description'=>'terminar modelo de la torca en maya',
            'dueDate'=> '2022-05-25',
            'status'=>'en proceso'
        ]);
        DB::table('tasks')->insert([
            'title'=>'Hacer video de RH',
            'description'=>'Grabar video de 2 minutos sobre temas de rh',
            'dueDate'=> '2022-05-26',
            'status'=>'sin empezar'
        ]);
        DB::table('tasks')->insert([
            'title'=>'Proyecto swift',
            'description'=>'terminar modulo del examen final PDM2',
            'dueDate'=> '2022-05-19',
            'status'=>'terminado'
        ]);
    }
}
