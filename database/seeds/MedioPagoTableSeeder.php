<?php

use Illuminate\Database\Seeder;
use App\MedioPago;

class MedioPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medioPago = new MedioPago();
        $medioPago->name = 'Transferencia';
        $medioPago->save();

        $medioPago = new MedioPago();
        $medioPago->name = 'OXXO';
        $medioPago->save();

        $medioPago = new MedioPago();
        $medioPago->name = 'Efectivo';
        $medioPago->save();

        $medioPago = new MedioPago();
        $medioPago->name = 'MasterCard';
        $medioPago->save();

        $medioPago = new MedioPago();
        $medioPago->name = 'Visa';
        $medioPago->save();

        $medioPago = new MedioPago();
        $medioPago->name = 'American Express';
        $medioPago->save();

    }
}
