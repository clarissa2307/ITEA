<!DOCTYPE html>
<?php
	session_start();
	if (@!$_SESSION['nombre']) {
		header("Location:login.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Formulario</title>
    
</head>
<body>

</div>
</header>

 
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" >Registro de Educandos</a>
<a class="navbar-brand">Bienvenido <strong><?php echo $_SESSION['nombre'];?></strong></a>
<a class="navbar-brand" href="desconectar.php">Cerrar sesion</a>

</nav>
<form action="ejecutaactualizar.php" method="POST">
    <br>
   <div class="container">
      <div class="">
        <h2>Datos Personales</h2>
      </div> 
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label>Nombre</label>
          <input type="text" placeholder="Nombre" class="form-control " name="nombre" value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="">Apellido Paterno</label>
          <input type="text" placeholder="Apellido Paterno" class="form-control " name="apellidop"  value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label >Apellido Materno</label>
          <input type="text" placeholder="Apellido Materno" class="form-control "  name="apellidom"  value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label >Curp</label>
          <input type="text" placeholder="Curp" class="form-control " name="curp"  value="" required>
        </div>
        <div class="col-md-3 mb-3">
          <label >Edad</label>
          <input type="number" placeholder="Edad" class="form-control"  name="edad"  value="" required>
        </div>
        <div class="col-md-3 mb-3">
          <label >Genero</label>
          <select class="custom-select"  name="genero"  value="" required>
            <option>Mujer</option>
            <option>Hombre</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label >Fecha Nacimiento</label>
          <input type="date" placeholder="Edad" class="form-control " name="fecha"  value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label>Correo electronico</label>
          <input type="email" placeholder="Correo electronico" class="form-control " name="correo"  value="" required>
        </div>
      </div>  
      
      <div class="">
        <h2>Lugar de Residencia</h2>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label >Domicilio</label>
          <input type="text" placeholder="Nombre Domicilio" class="form-control " name="calle"  value="" required>
        </div>
        <div class="col-md-3 mb-3">
          <label >No. Ext.</label>
          <input type="text" placeholder="No. Ext." class="form-control "  name="ext" value="" required>
        </div>
        <div class="col-md-3 mb-3">
          <label >No. Int.</label>
          <input type="text" placeholder="No. Int" class="form-control " name="inte"  value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label >Municipio</label>
          <input type="text" placeholder="Municipio" class="form-control " name="municipio" value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label >Localidad</label>
          <input type="text" placeholder="Localidad" class="form-control " name="localidad"  value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label >Colonia</label>
          <input type="text" placeholder="Colonia" class="form-control " name="colonia"  value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label >Telefono Celular</label>
          <input type="tel" placeholder="Telefono Celular" class="form-control " name="telefono"  value="" required>
        </div>
        
        </div>
        <div class="">
          <h2>Nivel Educativo que solicita</h2>
        </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label >Nivel que solicita</label>
          <select class="custom-select"  name="estudio" value="" required>
            <option>Alfabetizacion</option>
            <option>Primaria</option>
            <option>Secundaria</option>
          </select>
        </div>
      </div>
	    
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
      </div>
    </div>
  </form>
  <?php
		if(isset($_POST['submit'])){
			require("eduregistro.php");
		}
	?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>