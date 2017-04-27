<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
     
    </head>
    <body>
    <form class="form-inline" style="padding:10% 20%;">    
        {{ csrf_field() }}    
            <div class="row"  >

                <div class="col-xs-12 col-md-3">
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

                <div class="col-xs-12 col-md-3">
                    <div class="form-group">
                       <label  for="exampleInputEmail3">Placa:</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                        
                    </div>
                </div> 
                  

                <div class="col-xs-12 col-md-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="entrada_btn">ENTRADA</button>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-md-2">

                     <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="salida_btn">SALIDA</button>
                    </div>
                </div>
                


            </div>
<br>
<hr class="half-rule"/>

            <div class="row">                
                <div class="col-xs-12 col-md-3">
                    <label  for="exampleInputEmail3">Fecha Entrada:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                    <label  for="exampleInputEmail3">Hora Entrada:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">

                    <label  for="exampleInputEmail3">Hora Saluda:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">

                    <label  for="exampleInputEmail3">Hora Salida:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                </div>


                <div class="col-xs-12 col-md-2">
                    <label  for="exampleInputEmail3">Tipo de Vehículo:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                    <label  for="exampleInputEmail3">Placa:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                    <label  for="exampleInputEmail3">Tipo tarifa:</label>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                </div>
            </div>
        
    </body>
</html>
