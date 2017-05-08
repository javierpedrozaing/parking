 @extends("layouts.app");

@section('title')
Home
@endsection

 @section('contentForm')
    <form class="form-inline" style="padding:5% 10%;">    
        {{ csrf_field() }}    
            <div class="row" >
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                       <label  for="exampleInputEmail3">Tipo de vehiculo:</label>
                        <select class="form-control">
                            <option>CARRO</option>
                            <option>CAMIONETA</option>
                            <option>MOTO</option>
                            <option>CAMION</option>
                            <option>CICLA</option>                            
                        </select>                        
                    </div>
                </div>    
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="form-group">
                       <label  for="exampleInputEmail3">Placa:</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                        
                    </div>
                </div> 
                  
                <div class="col-xs-12 col-sm-1 col-md-3">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="entrada_btn">ENTRADA</button>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-1 col-md-3">

                     <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="salida_btn">SALIDA</button>
                    </div>
                </div>            

            </div>
<br>
<hr class="half-rule"/>
            <div class="row">   
            <div class="panel panel-primary col-xs-12 col-sm-4 col-md-4" style="padding:20px;">             
                <div >
                    <label  for="exampleInputEmail3">Fecha Entrada:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Hora Entrada:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">    <br>        
                    <label  for="exampleInputEmail3">Hora Salida:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                </div>

                <div>
                    <label  for="exampleInputEmail3">Tipo de Vehículo:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Placa:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Tipo tarifa:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                     <div class="panel panel-primary ">
                          <!-- Default panel contents -->
                          <div class="panel-heading">LUGARES DISPONIBLES</div>                         
                          <!-- Table -->
                          <table class="table table-bordered">

                          @forelse($lugares_disponibles as $lugar)
                             <tr>
                                <th>Tipo lugar</th>                                
                                <th>Ubiación</th>    
                                <th>Estado</th>                            
                                <th>Descripción</th>                              
                            </tr>

                            <tr>
                                <td>{{ $lugar->tipo_lugar }}</td>
                                <td>{{ $lugar->nombre_ubicacion }}</td>                                
                                <td>{{ $lugar->estado_id }}</td>
                                <td>{{ $lugar->descripcion_ubicacion }}</td>
                            </tr>

                          @empty
                            <p>No hay lugares desde la bd</p>
                          @endforelse

                           
                          </table>
                    </div>
                </div>
            </div>


    </form>
@endsection