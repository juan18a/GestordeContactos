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




  <button type="submit" class="btn btn-primary">Crear</button>
</form>

</div>


</div>



@endsection