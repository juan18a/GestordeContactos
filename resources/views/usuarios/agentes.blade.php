@extends('layouts.dashboard')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Agentes</h1>
   

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resultados:</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asignar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asignar</th>
                    <th>Eliminar</th>
                  </tr>
                </tfoot>
                <tbody>

             @foreach($users as $user)
                  <tr>
                    <td>{{ $user->name_user }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ url('seleccion/Contacto', $user->id)}}" class="btn btn-primary">Asignar</a></td>
                    <td>Borrar</td>
                  </tr>
            @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


@endsection