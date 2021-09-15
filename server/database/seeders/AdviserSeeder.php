<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adviser;

class AdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adviser_data = [
            'nombre' => 'Jose Alvarez',
            'cedula' => 1152216497,
            'telefono' => 3023022967,
            'fecha_nacimiento' => '1997-02-18',
            'genero' => 'masculino',
            'cliente' => 'IBM',
            'sede' => 'Ruta N',
            'usuario' => 'gestion',
            'edad' => 24
        ];
        $adviser = new Adviser($adviser_data);
        $adviser->save();

        $adviser_data = [
            'nombre' => 'Camila Castro',
            'cedula' => 1152567843,
            'telefono' => 3114556789,
            'fecha_nacimiento' => '2000-06-12',
            'genero' => 'femenino',
            'cliente' => 'FX',
            'sede' => 'Puerto Seco',
            'usuario' => 'comunicaciones',
            'edad' => 21
        ];

        $adviser = new Adviser($adviser_data);
        $adviser->save();
    }
}
