@extends('layouts.dashboard')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Datos del Contacto</h1>
   

        <!-- Ver datos de contacto -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos Básicos:</h6>
          </div>
          <div class="card-body">
              <div class="row">
                    <p class="col-xs-12 col-md-6"><strong>Nombre: </strong>{{ $contacto->name }}</p>
                    <p class="col-xs-12 col-md-6"> <strong>Apellido: </strong>{{ $contacto->lastname }}</p>
              </div>
              <div class="row">
                <p class="col-xs-12 col-md-6"><strong>Email: </strong>{{ $contacto->email }}</p>
                <p class="col-xs-12 col-md-3 clasificacion"><strong>Calificación: </strong>
                  
                  @switch($contacto->puntuación)
                  @case(1)
                

                 
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
                     

               
                    @break

                    @case(2)
                    
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
                
                   @break

                   @case(3)
              
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
             
                @break

                @case(4)
          
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
       
                   @break

                   @case(5)
                
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
       
                   @break

                    @default  

               
        
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
                  
                   
                    @endswitch
                    </p>
            </div>
          </div>
        </div>

        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Datos de la Solicitud:</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                            <p class="col-xs-12 col-md-4"><strong>Servicio :</strong>{{ $contacto->name_servicio }}</p>
                            <p class="col-xs-12 col-md-4"><strong>Presupuesto Mínimo: </strong>{{ $contacto->presupuesto_min }} MXN</p>
                            <p class="col-xs-12 col-md-4"><strong>Presupuesto Máximo: </strong>{{ $contacto->presupuesto_max }} MXN</p>
                    </div>
                    <div class="row">
                            <p class="col-xs-12 col-md-12"><strong>Medio de Pago: </strong>{{ $contacto->name_medio_pago }}</p>
                    </div>
                    <div class="row">      
                            <p class="col-xs-12 col-md-12" ><strong>Descripción del la Solicitud:</strong></p>
                            <p class="col-xs-12 col-md-12" >
                                    {{ $contacto->requerimiento }}
                            </p>
                    </div>
                    
                     
                </div>
              </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


@endsection