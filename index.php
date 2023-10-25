<?php
    session_start();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/CSS/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
    </style>
    <title>Index</title>
</head>
<body>
    <header>
    <div class="contenedor-logo-texto">
        <img src="vista/IMG/logoindexx.png" alt="Logo" class="logo">
        <span class="texto">Diosam</span>
    </div>
        <div class="contenido">
            <ul>
                <li>Menu</li>
                <li>Galeria<a href="vista/DOCS/galeria.php"></a></li>
                <li>Conócenos</li>
                <li>Visítanos</li>
                <li></li>
            </ul>
        </div>  
    </header>
    <div class="contenedor-imagen">
        <img src="vista/IMG/Fondo-Index.jpg" alt="Fondo" class="Fondo-Index">
    </div>
    
    <div class="cards">
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Servicios</h5>
              <p class="card-text">Conoce nuestros servicios y explora el poder de crear tu estilo junto a Diosam.</p>
              <a href="vista/DOCS/servicios.php" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/reserva1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Reservas</h5>
                <p class="card-text">Agenda una cita y prepárate para los cambios que tenemos preparados para ti.</p>
                <a href="vista/DOCS/registrarcita.php" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/cepilloo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Galería</h5>
              <p class="card-text">Observa la calidad de nuestros trabajos por si quieres alguna referencia.</p>
              <a href="" class="btn btn-danger">Bienvenido</a>
            </div>
        </div>    
    </div>
    <div class="fondo-diferente">
        <p>hola care colA</p>
    </div>
    
</body>
    <div class="cards2" style="margin-top: 40pc;">
  <div class="row g-0 bg-body-secondary position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="..." class="w-100" alt="...">
  </div>

  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">JEKLINE</h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to.</p>
  </div>
  </div>
</div>
    </div>
<footer>
  <div class="contenido">
      <ul>
          <li>Información de contacto:</li>
          <li>Teléfono: 123-456-789</li>
          <li>Correo: info@example.com</li>
          <li>Dirección: Calle Principal, Ciudad</li>
      </ul>
  </div>
</footer>
</html>
