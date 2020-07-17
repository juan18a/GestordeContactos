<?php

namespace App\Http\Controllers;

use App\Contactos;
use Illuminate\Http\Request;
use Response;
use App\User;
use App\Notifications\ComprobarEmail;
use Illuminate\Support\Facades\Notification;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Contactos\StoreContactoRequest;


class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /*
     
        Consulta de Contactos a nivel de Admin y Root
     
     */
    public function index(Request $request)
    {

        $request->user()->authorizeRoles(['root','admin']);
        $Contactos = DB::table('contactos')
        ->select('contactos.name as name','contactos.email as email', 
        'contactos.email_verified as email_verified', 'users.name as name_user','contactos.puntuación as puntos', 'contactos.id as id', 'contactos.uuid as uuid')
        ->leftJoin('users', 'users.id', '=', 'contactos.id_cliente')
        ->get();
        return view('contactos.contactos_clientes', compact('Contactos'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*    
        $attr = $request->all();
        $attr['uuid'] = Uuid::generate()->string;
        $contactos = Contactos::create($attr);           
        $contacto = Contactos::where('email', $request->input('email'))->first();
        $fromUser = $contacto->name;
        $email = $contacto->email;
        $id = $contacto->id;
        //Envia la notificacion via email y pasan los datos de la persona para saludarlo
        $contactos->notify(new ComprobarEmail($fromUser, $attr['uuid']));
        return Response::json($contactos);*/

    }

  
    /**
     * Display the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {

        $contacto = DB::table('contactos')
        ->select('contactos.*', 'servicios.name as name_servicio', 'medio_pagos.name as name_medio_pago')
        ->leftjoin('servicios', 'servicios.id', '=', 'contactos.id_servicio')
        ->leftjoin('medio_pagos', 'medio_pagos.id', '=', 'contactos.id_mediopago')
        ->where('contactos.uuid', $uuid)
        ->first();

     

        return view('contactos.vercontacto', compact('contacto'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactos $contactos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactos $contactos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactos $contactos)
    {
        //
    }



    /*
        Formulario para ingresar los datos de los contactos
    */
    public function crearContacto(StoreContactoRequest $request){
        $attr = $request->all();
        $attr['uuid'] = Uuid::generate()->string;
        $contactos = Contactos::create($attr);           
        $contacto = Contactos::where('email', $request->input('email'))->first();
        $fromUser = $contacto->name;
        $email = $contacto->email;
        $id = $contacto->id;
        //Envia la notificacion via email y pasan los datos de la persona para saludarlo
        $contactos->notify(new ComprobarEmail($fromUser, $attr['uuid']));
        return Response::json($contactos);
    }






 /* Muestra contactos según el usuario */
 public function contactosPorUsuario(Request $request){

    if(Auth::user()->hasRole('client')){
        $request->user()->authorizeRoles(['client']);
        $Contactos = DB::table('contactos')
        ->select('contactos.name as name','contactos.email as email', 
        'contactos.email_verified as email_verified', 'users.name as name_user', 'contactos.puntuación as puntos', 'contactos.id as id','contactos.uuid as uuid')
        ->leftjoin('users', 'users.id', '=', 'contactos.id_agente')
        ->where('contactos.id_cliente', Auth::user()->id)
        ->get();
        return view('clientes.contactos', compact('Contactos'));
    }

    if(Auth::user()->hasRole('agent')){
        $request->user()->authorizeRoles(['agent']);
        $Contactos = DB::table('contactos')
        ->select('contactos.name as name','contactos.email as email', 
        'contactos.email_verified as email_verified', 'contactos.id as id', 'contactos.puntuación as puntos', 'contactos.uuid as uuid')
        ->leftjoin('users', 'users.id', '=', 'contactos.id_agente')
        ->where('contactos.id_agente', Auth::user()->id)
        ->get();
        return view('agentes.contactos', compact('Contactos'));
    }
  


}





     /* 
        Funcion de validar email ValidarEmail
    */
    public function validarEmail($id_contacto)
    {
        $contacto = Contactos::where('uuid', $id_contacto)->first();
        $contacto->email_verified = true;
        $contacto->save();
        return redirect('/confirmacion'); 
    }

    /* Funcion Calificar Contacto */
    public function calificarContacto(Request $request,Contactos $contacto){

        $request->user()->authorizeRoles('agent');
        $contactos = Contactos::find($contacto['id']);
        $contactos->puntuación = $request->input('estrellas');
        $contactos->save();

        return redirect('consulta/agente/contactos'); 
        //return view('agentes.calificar', compact('id_contacto'));

    }

    public function seleccionContacto(Request $request, User $usuario){

        if(Auth::user()->hasRole('client')){
            $request->user()->authorizeRoles('client');
            $usuario = User::find($usuario['id']);
            $Contactos = DB::table('contactos')
            ->select('contactos.name as name','contactos.email as email', 
            'contactos.email_verified as email_verified',  'contactos.id as id_contacto')
            ->join('users', 'users.id', '=', 'contactos.id_cliente')
           ->where('contactos.id_cliente', Auth::user()->id)
           ->where('contactos.id_agente', null)
            ->get();
           
            return view('clientes.asignar', compact('Contactos', 'usuario'));
        }else{
           
            $request->user()->authorizeRoles(['root','admin']);
            $usuario = User::find($usuario['id']);
            $Contactos = Contactos::where('id_cliente', null)->where('email_verified', '!=' ,null)->get();
            return view('contactos.asignar', compact('Contactos', 'usuario'));
        }

    }

    public function asignarContacto(Request $request, Contactos $contacto, $idusuario){


        if(Auth::user()->hasRole('client')){
            $request->user()->authorizeRoles('client');

            $Contactos = Contactos::find($contacto['id']);
            $Contactos->id_agente = $idusuario;
            $Contactos->save();

            return redirect('/consulta/cliente/contactos');
        }else{
            $request->user()->authorizeRoles(['root','admin']);

            $Contactos = Contactos::find($contacto['id']);

            $Contactos->id_cliente = $idusuario;
            $Contactos->save();
  
      
            return redirect('contacto'); 


        }

       
                 

    }



















}
