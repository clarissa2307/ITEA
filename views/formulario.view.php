<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Formulario</title>
    
</head>
<body>
<form>
<br>
  <div class="container">
    <div class="">
      <h2>Datos Personales</h2>
    </div> 
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre" class="form-control is-valid" id="nombre" value="" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="">Apellido Paterno</label>
        <input type="text" placeholder="Apellido Paterno" class="form-control is-valid" id="apellidop" value="" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="apellidom">Apellido Materno</label>
        <input type="text" placeholder="Apellido Materno" class="form-control is-valid" id="apellidom" value="" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="curp">Curp</label>
        <input type="text" placeholder="Curp" class="form-control is-valid" id="curp" value="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="edad">Edad</label>
        <input type="number" placeholder="Edad" class="form-control " id="edad" value="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="genero">Genero</label>
        <select class="custom-select" id="genero" value="" required>
          <option>Mujer</option>
          <option>Hombre</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="fecha">Fecha Nacimiento</label>
        <input type="date" placeholder="Edad" class="form-control " id="fecha" value="" required>
      </div>
    </div>  
    <div class="">
    <h2>Lugar de Residencia</h2>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="domicilio">Domicilio</label>
        <input type="text" placeholder="Nombre Domicilio" class="form-control is-valid" id="domicilio" value="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="ext">No. Ext.</label>
        <input type="text" placeholder="No. Ext." class="form-control is-valid" id="ext" value="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="int">No. Int.</label>
        <input type="text" placeholder="No. Int" class="form-control is-valid" id="int" value="" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="municipio">Municipio</label>
        <input type="text" placeholder="Municipio" class="form-control is-valid" id="municipio" value="" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="localidad">Localidad</label>
        <input type="text" placeholder="Localidad" class="form-control is-valid" id="Localidad" value="" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="colonia">Colonia</label>
        <input type="text" placeholder="Colonia" class="form-control is-valid" id="colonia" value="" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="tel">Telefono Celular</label>
        <input type="tel" placeholder="Telefono Celular" class="form-control is-valid" id="tel" value="" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="email">Correo electronico</label>
        <input type="email" placeholder="Correo electronico" class="form-control is-valid" id="email" value="" required>
      </div>
      </div>
      <div class="">
         <h2>Nivel Educativo que solicita</h2>
      </div>
      <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="genero">Nivel que solicita</label>
        <select class="custom-select" id="genero" value="" required>
          <option>Alfabetizacion</option>
          <option>Primaria</option>
          <option>Secundaria</option>
       </select>
      </div>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>
