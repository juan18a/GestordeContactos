<?php

use Illuminate\Database\Seeder;
use App\Contactos;
use Webpatser\Uuid\Uuid;


class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contacto = new Contactos();
        $Contacto->uuid = Uuid::generate()->string;
        $Contacto->name="Jose";
        $Contacto->lastname="Dominguez";
        $Contacto->email="jose@gmail.com";
        $Contacto->presupuesto_min = 100;
        $Contacto->presupuesto_max = 500;
        $Contacto->id_servicio = 2;
        $Contacto->id_mediopago = 1;
        $Contacto->requerimiento = "Necesito ayuda con....";
        $Contacto->email_verified = true;
        $Contacto->save();

        $Contacto = new Contactos();
        $Contacto->uuid = Uuid::generate()->string;
        $Contacto->name="Maria";
        $Contacto->lastname="Celeste";
        $Contacto->email="maria@gmail.com";
        $Contacto->presupuesto_min = 50;
        $Contacto->presupuesto_max = 100;
        $Contacto->id_servicio = 1;
        $Contacto->id_mediopago = 3;
        $Contacto->requerimiento = "Quiero mi pelo liso como....";
        $Contacto->email_verified = true;
        $Contacto->save();

        $Contacto = new Contactos();
        $Contacto->uuid = Uuid::generate()->string;
        $Contacto->name="Lucía";
        $Contacto->lastname="Perdomo";
        $Contacto->email="lucia@gmail.com";
        $Contacto->presupuesto_min = 5000;
        $Contacto->presupuesto_max = 10000;
        $Contacto->id_servicio = 5;
        $Contacto->id_mediopago = 5;
        $Contacto->requerimiento = "Quiero viajar a ....";
        $Contacto->email_verified = true;
        $Contacto->save();

        $Contacto = new Contactos();
        $Contacto->uuid = Uuid::generate()->string;
        $Contacto->name="Marta";
        $Contacto->lastname="Castillo";
        $Contacto->email="marta@gmail.com";
        $Contacto->presupuesto_min = 2000;
        $Contacto->presupuesto_max = 8000;
        $Contacto->id_servicio = 5;
        $Contacto->id_mediopago = 5;
        $Contacto->requerimiento = "Quiero viajar a ....";
        $Contacto->save();

        $Contacto = new Contactos();
        $Contacto->uuid = Uuid::generate()->string;
        $Contacto->name="Luis";
        $Contacto->lastname="López";
        $Contacto->email="luis@gmail.com";
        $Contacto->presupuesto_min = 2000;
        $Contacto->presupuesto_max = 8000;
        $Contacto->id_servicio = 6;
        $Contacto->id_mediopago = 6;
        $Contacto->requerimiento = "Quiero hospedarme en el hotel....";
        $Contacto->save();



    }
}
