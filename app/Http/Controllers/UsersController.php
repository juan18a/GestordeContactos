<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Users\StoreUserRequest;
use Response;


class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    use RegistersUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->get();
        return Response::json( $users );
        
    }


    public function consultarUsuarios(Request $request, $tipoCosulta){

    if($tipoCosulta == 'administradores'){

        $request->user()->authorizeRoles(['root','admin']);
        $users = DB::table('users')
        ->select('users.name as name_user','users.email as email', 'users.id as id')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->where('roles.id', '=', 2)
        ->get();

        return view('usuarios.usuarios', compact('users'));

    }
    
    if($tipoCosulta == 'clientes'){

        $request->user()->authorizeRoles(['root','admin']);
        $users = DB::table('users')
        ->select('users.name as name_user','users.email as email', 'users.id as id')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->where('roles.id', '=', 3)
        ->get();

        return view('usuarios.clientes', compact('users'));

    }


    if($tipoCosulta == 'agentes'){

        $request->user()->authorizeRoles(['client']);
        $users = DB::table('users')
        ->select('users.name as name_user','users.email as email', 'users.id as id')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->where('roles.id', '=', 4)
        ->get();

        return view('usuarios.agentes', compact('users'));

    }
           
  


       

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        if(Auth::user()->hasRole('client')){
            $request->user()->authorizeRoles('client');
            return view('clientes.crearagente');
        }else{
            $request->user()->authorizeRoles(['root','admin']);
            return view('usuarios.crearusuario');
        }
   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(StoreUserRequest $request)
    {

        $id_tipousuario = $request->input('id_tipousuario');

        if(Auth::user()->hasRole('client')){
            $id_tipousuario = 4;
        }
        

        $users = new User();
        $users->name = $request->input('name');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));$users->id_creator = Auth::id();
        $users->save();

        switch($id_tipousuario){

            Case 2:
            $users->roles()->attach(Role::where('name', 'admin')->first());
            break;

            Case 3:
            $users->roles()->attach(Role::where('name', 'client')->first());
            break;

            Case 4:
            $users->roles()->attach(Role::where('name', 'agent')->first());
            break;

        }
        

        if($id_tipousuario == 2){
            return redirect('consulta/administradores');
        }else if($id_tipousuario == 3){
            return redirect('consulta/clientes');
        }else if($id_tipousuario == 4){
            return redirect('consulta/agentes');
        }else{
            return Response::json( $users ); 
        }
        

        
    





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
