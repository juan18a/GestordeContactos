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

   <div class="row">
    <div class="col-sm-12 col-md-12 text-justify">
    
<form method="POST" action="{{ route('users.store') }}">
 {{ csrf_field() }}
<div class="form-row">

<div class="col-12 col-md-6">
    
      <label for="exampleInputEmail1">Nombre</label>
    <input class="form-control" name="name" type="text"  placeholder="Nombre" required>

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








  <button type="submit" class="btn btn-primary">Crear</button>
</form>

</div>


</div>



@endsection