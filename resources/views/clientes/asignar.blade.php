@extends('layouts.dashboard')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Asignar Contactos</h1>
   

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
                    <th>Verificado</th>
                    <th>Asignar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Verificado</th>
                    <th>Asignar</th>
                  </tr>
                </tfoot>
                <tbody>


                       
                       
                    
                        
              

            @foreach ($Contactos as $Contacto)
                  <tr>
                    <td> {{ $Contacto->name }}</td>
                    <td>{{ $Contacto->email }}</td>

                    @if($Contacto->email_verified == null)
                    <td> No</td>
                    @else
                    <td>Si </td>
                    @endif
                    <td>
                        <!--
                        <form method="post" action="{{ url('asignar/Contacto', [ 'contacto' => $Contacto->id_contacto, 'idusuario' => $usuario->id_user ])}}" >
                            @method('POST')
                            @csrf


                                <button class="btn btn-primary" type="submit">Asignar</button>
                         </form>-->
                        
                        
                     
                        <a href="{{ url('asignar/Contacto', [ 'contacto' => $Contacto->id_contacto, 'idusuario' => $usuario->id])}}" class="btn btn-primary">
                        
                      Asignar</a></td>
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







