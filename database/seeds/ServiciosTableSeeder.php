<?php

use Illuminate\Database\Seeder;
use App\Servicios;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = new Servicios();
        $servicio->name = "Peluqueria";
        $servicio->save();

        $servicio = new Servicios();
        $servicio->name = "Bancario";
        $servicio->save();

        $servicio = new Servicios();
        $servicio->name = "Asesoría Legal";
        $servicio->save();

        $servicio = new Servicios();
        $servicio->name = "Aseguradoras";
        $servicio->save();

        $servicio = new Servicios();
        $servicio->name = "Agencia de Viaje";
        $servicio->save();

        $servicio = new Servicios();
        $servicio->name = "Hospedaje";
        $servicio->save();


        
    }
}
