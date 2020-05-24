<?php

use Illuminate\Database\Seeder;
use App\tipoUsuario;
class tipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        tipoUsuario::create([
            'id'=>'1',
            'tipoUsuario'=>'Administrador'
        ]);
        tipoUsuario::create([
            'id'=>'2',
            'tipoPermiso'=>'Inquilino'
        ]);
        tipoUsuario::create([
            'id'=>'3',
            'tipoPermiso'=>'Super Us'
        ]);
    }
}
