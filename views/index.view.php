<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>ITEA</title>
</head>
<body>
    <header>
        <nav class="menu">
            <a href="#acerca-de" id="btn-nuestra-institucion"> Nuestra Institucion</a>
            <a href="#trabajos" id="btn-servicios"> Servicios</a>
            <a href="#trabajos" id="btn-plaza"> Plaza</a>
            <a href="#contacto" id="btn-ubicacion"> Ubicación</a>

        </nav>
    </header>
    <main class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="py-4 border-bottom">
                    <div class="card-body text-success">
                    <h1 class="text-center">Servicios</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-center">
                <img src="img/alfa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-body text-danger">
                    <h3 class="card-title">Alfabetizacion</h3>
                    </div>
                    <p class="card-text">CURP <br>15 años cumplidos o más <br>fotografía digital <br>Llenar registro</p>
                    <a href="#" class="btn btn-sm btn-primary">Registrate</a>
                </div>
            </div>
            
            <div class="card text-center">
                <img src="img/primaria.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-body text-danger">
                        <h3 class="card-title">Primaria</h3>
                    </div>
                    <p class="card-text">CURP <br>15 años cumplidos o más <br>fotografía digital <br>Boletas de último grado de estudios <br> (en caso de tener) <br>Llenar registro </p>
                    <a href="#" class="btn btn-sm btn-primary">Registrate</a>
                </div>
            </div>
            <div class="card text-center" >
                <img src="img/secundaria.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-body text-danger">
                        <h3 class="card-title">Secundaria</h3>
                    </div>
                    <p class="card-text">CURP <br>15 años cumplidos o más <br>fotografía digital <br>Acta de nacimiento
                    <br>Certificado de primaria <br>Boletas de último grado de estudios <br>Llenar registro</p>
                    <a href="#" class="btn btn-sm btn-primary">Registrate</a>
                </div>
            </div>
  
        </div>

        <section class="galeria" id="galeria">
      <div class="foto">
       <img src="img/1.jpg" alt="">
      </div>
      <div class="foto">
        <img src="img/2.jpg" alt="">
       </div>
       <div class="foto">
        <img src="img/3.jpg" alt="">
       </div>
       <div class="foto">
        <img src="img/4.jpg" alt="">
       </div>
       <div class="foto">
        <img src="img/5.jpg" alt="">
       </div>
       <div class="foto">
         <img src="img/6.jpg" alt="">
        </div>
        <div class="foto">
         <img src="img/7.jpg" alt="">
        </div>
        <div class="foto">
         <img src="img/8.jpg" alt="">
        </div>
    </section>   
    <section class="ubicacion" id="ubicacion">
      <div class="contenedor">
        <h3 class="titulo">Ubicacion</h3>
        <div class="direccion">
          <p class="calle">2915 Primrose Lane<br />Anaheim, CA 92806</p>
          <p class="telefono">(503)400-5479</p>
          <p class="correo">correo [arroba] tucorreo.com</p>
        </div>
        <div class="horarios">
            <h4>Horarios</h4>
            <p class="entre-semana">Lunes a Viernes <br /> 8:00am - 9:00pm </p>
            <p class="fin-semana">Sabado y Domingo <br /> 11:00am - 11:00pm </p>
        </div>
      </div>
    </section> 
    <section class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6332.324334359095!2d-97.92562738901755!3d19.316142309066464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cffc892a8d9547%3A0xc5e43e90bf214f40!2sMuseo%20Taurino%20de%20Huamantla!5e0!3m2!1ses!2smx!4v1591925848922!5m2!1ses!2smx"
       width="1150" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
   </section>
   <footer>
     <div class="contenedor">
       <div class="copyright">
      <p>Copryright Martha Clarissa @ 2020</p>
    </div> 
    </div>
   </footer>
    </main>
    <header>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>