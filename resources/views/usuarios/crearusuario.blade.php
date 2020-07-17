@extends('layouts.dashboard')

@section('content')

@if($errors->any())

  <div class="alert alert-danger">

        <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
        </ul>

  </div>

 
@endif




<div class="container mt-4">
  <!-- Content here -->

  <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Formulario</h6>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-12 col-md-12 text-justify">
            
        <form method="POST" action="{{ route('users.store') }}">
         {{ csrf_field() }}
        <div class="form-row">
        
        <div class="col-12 col-md-6">
            
              <label for="exampleInputEmail1">Nombre</label>
            <input class="form-control" name="name" type="text" placeholder="Nombre" required>
        
        </div>
           
        
        <div class="col-12 col-md-6">
         
                <label for="exampleInputEmail1">Apellido</label>
              <input class="form-control" name="lastname" type="text" placeholder="Apellido" required>
              
        </div>
        
        
        </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        
        
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
        
        
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
        
        
        
          </div>
        
        
        
        
        
        
        
        
         <div class="form-group">
            <label for="exampleInputEmail1">Tipo Usuario</label>
           <select class="form-control" name="id_tipousuario">
              <option value="2">Administrador</option>
              <option value="3">Cliente</option>
          </select>
        
          </div>
        
        
          <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        
        </div>
        
        
        </div>



    </div>
  </div>


  



@endsection