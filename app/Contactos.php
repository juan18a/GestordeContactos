<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;






class Contactos extends Model
{
   //protected $guarded = [];

   use Notifiable;

   protected $fillable = ['uuid','name','lastname','email','id_servicio','presupuesto_min','presupuesto_max','id_mediopago','requerimiento', ];




     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
