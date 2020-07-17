@extends('layouts.dashboard')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Contactos</h1>
   

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
                    <th>Agente</th>
                    <th>Calificación</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Verificado</th>
                    <th>Agente</th>
                    <th>Calificación</th>
                    <th>Opciones</th>
                  </tr>
                </tfoot>
                <tbody>


                       
                       
                    
                        
              

            @foreach ($Contactos as $Contacto)
                  <tr>
                    <td> {{ $Contacto->name }}</td>
                    <td>{{ $Contacto->email }}</td>

                    @if($Contacto->email_verified == null)
                    <td> No </td>
                    @else
                    <td>Si </td>
                    @endif
                    <td>
                        {{ $Contacto->name_user }}
                       </td>
                       <td> 
                         
                          <form  method="POST" action="{{ route('calificar.contacto', [ 'contacto' => $Contacto->id]) }}">
                              {{ csrf_field() }}
                              
                        
                        @switch($Contacto->puntos)
                        @case(1)
                      

                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"
                            checked><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"
                            ><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"
                            ><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"
                            ><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1" checked><!--
                            --><label for="radio5">★</label>
                           </p>

                     
                          @break

                          @case(2)
                          <p class="clasificacion">
                              <input id="radio6" type="radio" name="estrellas" value="5"
                              ><!--
                              --><label for="radio6">★</label><!--
                              --><input id="radio7" type="radio" name="estrellas" value="4"
                              ><!--
                              --><label for="radio7">★</label><!--
                              --><input id="radio8" type="radio" name="estrellas" value="3"
                              ><!--
                              --><label for="radio8">★</label><!--
                              --><input id="radio9" type="radio" name="estrellas" value="2"
                              checked><!--
                              --><label for="radio9">★</label><!--
                              --><input id="radio10" type="radio" name="estrellas" value="1" ><!--
                              --><label for="radio10">★</label>
                             </p>
                         @break

                         @case(3)
                         <p class="clasificacion">
                            <input id="radio11" type="radio" name="estrellas" value="5"
                            ><!--
                            --><label for="radio11">★</label><!--
                            --><input id="radio12" type="radio" name="estrellas" value="4"
                            ><!--
                            --><label for="radio12">★</label><!--
                            --><input id="radio13" type="radio" name="estrellas" value="3"
                            checked><!--
                            --><label for="radio13">★</label><!--
                            --><input id="radio14" type="radio" name="estrellas" value="2"
                            ><!--
                            --><label for="radio14">★</label><!--
                            --><input id="radio15" type="radio" name="estrellas" value="1" ><!--
                            --><label for="radio15">★</label>
                           </p>
                      @break

                      @case(4)
                      <p class="clasificacion">
                      <input id="radio16" type="radio" name="estrellas" value="5"><!--
                      --><label for="radio16">★</label><!--
                      --><input id="radio17" type="radio" name="estrellas" value="4"
                      checked><!--
                      --><label for="radio17">★</label><!--
                      --><input id="radio18" type="radio" name="estrellas" value="3"
                      ><!--
                      --><label for="radio18">★</label><!--
                      --><input id="radio19" type="radio" name="estrellas" value="2"
                      ><!--
                      --><label for="radio19">★</label><!--
                      --><input id="radio20" type="radio" name="estrellas" value="1" ><!--
                      --><label for="radio20">★</label>
                      </p>
                         @break

                         @case(5)
                         <p class="clasificacion">
                         <input id="radio21" type="radio" name="estrellas" value="5"
                         checked><!--
                         --><label for="radio21">★</label><!--
                         --><input id="radio22" type="radio" name="estrellas" value="4"
                         ><!--
                         --><label for="radio22">★</label><!--
                         --><input id="radio23" type="radio" name="estrellas" value="3"
                         ><!--
                         --><label for="radio23">★</label><!--
                         --><input id="radio24" type="radio" name="estrellas" value="2"
                         ><!--
                         --><label for="radio24">★</label><!--
                         --><input id="radio25" type="radio" name="estrellas" value="1" ><!--
                         --><label for="radio25">★</label>
                        </p>
                         @break

                          @default  

                     
                          <p class="clasificacion">
                              <input id="radio26" type="radio" name="estrellas" value="5"
                              ><!--
                              --><label for="radio26">★</label><!--
                              --><input id="radio27" type="radio" name="estrellas" value="4"
                              ><!--
                              --><label for="radio27">★</label><!--
                              --><input id="radio28" type="radio" name="estrellas" value="3"
                              ><!--
                              --><label for="radio28">★</label><!--
                              --><input id="radio29" type="radio" name="estrellas" value="2"
                              ><!--
                              --><label for="radio29">★</label><!--
                              --><input id="radio30" type="radio" name="estrellas" value="1" ><!--
                              --><label for="radio30">★</label>
                             </p>
                         
                          @endswitch
                          </form>
                        </td>
                        <td>
                            
                            <a href="{{ route('contacto.show', [ 'uuid' => $Contacto->uuid])}}" class="btn btn-primary">
                              <i class="fas fa-eye"></i>
                              </a>
                          
                            </td>
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
