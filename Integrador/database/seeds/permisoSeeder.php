<?php

use Illuminate\Database\Seeder;
use App\permiso;
class permisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        permiso::create([
            'id'=>'1',
            'tipoPermiso'=>'Administrar departamento'
        ]);
        permiso::create([
            'id'=>'2',
            'tipoPermiso'=>'Administrar inmueble'
        ]);
        permiso::create([
            'id'=>'3',
            'tipoPermiso'=>'Administrar sistema'
        ]);
    }
}
