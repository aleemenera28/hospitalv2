<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
  <!-- ESTILOS PERSONALIZADOS CSS -->
  <link rel="shortcut icon" href="img/kanye.ico">
  <link rel="stylesheet" href="iniciar_sesion/estilos-carga-inicio.css">
  <link rel="stylesheet" href="css/estilos-glass.css">
  <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
  <!-- JS AJAX -->
  <script src="js/jquery-3.5.1/jquery.min.js"></script>
  <!-- CSS Y JS SWEET ALERT 2 -->
  <script src="js/sweetalert2@11/sweetalert2.js"></script>

  <title>Zapatería Adonay</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="bod">


  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="images/icon2.png" alt="" width="55" height="40" class="d-inline-block align-text-top">
      <a class="navbar-brand" href="#">ABC Hospital</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              See by categories
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="hms/user-login.php">Patient</a></li>
              <li><a class="dropdown-item" href="hms/doctor/index.php">Doctor</a></li>
              <li><a class="dropdown-item" href="hms/admin/index.php">Admin</a></li>
            </ul>
        </ul>
      </div>
      <div class="d-flex d-sm-none d-lg-block">
        <a class="btn btn-outline-primary mx-3" href="iniciar_sesion/iniciarSesion.php">Iniciar Sesión</a>
      </div>
      <div class="d-flex d-sm-none d-lg-block">
        <a class="btn btn-outline-primary mx-3" href="Registrar/Registrar.php">Regístrate</a>
      </div>
    </div>
    </div>
  </nav>

  <!-- Primer nivel -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-lg-12">
        <h1 class="mt-5 text-primary text-center">WELCOME TO THE HOSPITAL</h1> <br>
        <div class="row justify-content-center">
          <div class="row">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-11 mt-1">
                  <div id="carouselExampleControls" class="carousel slide" data-interval="corousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/slider-image1.jpg">
                      </div>
                      <div class="carousel-item">
                        <img src="images/slider-image2.jpg">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div><br>
          <h5 class="text-center text-primary col-lg-8 mt-3">Welcome to the ABC hospital's portal,
            in this demo you can schedule an appointment, see your appointments if you are a doctor and also manage the entire hospital.</h5><br>
        </div>
      </div>
    </div>
  </div>
  </div><br>

  <!-- Apartados tarjetas temas -->
  <style>
    /* Estilo inicial al pasar el mouse por encima de la tarjeta */
    .card:hover {
      transform: scale(1.05);
      /* Escala la tarjeta al 105% */
      transition: transform 0.3s ease;
      /* Transición de escala suave */
      cursor: pointer;
      /* Cambia el cursor a una mano para indicar que es clickable */
    }

    /* Estilo al hacer clic en la tarjeta */
    .card.clicked {
      transform: scale(1.1);
      /* Escala la tarjeta al 110% */
    }
  </style>

  <div class="mt-2 ">
    <h1 class="text-center text-primary">CHECK OUT ALL OUR SERVICES!</h1>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="row row-cols-1 row-cols-lg-3 g-3">
        <div class="col">
          <div class="card text-white bg-info mb-3 clickable-card">
            <a href="hms/user-login.php">
              <img src="images/patient.jpg" class="card-img-top w-35" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title">You need an appointment?</h5>
              <p class="card-text">You can schedule an appointment at our hospital!</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-white bg-danger mb-3">
            <a href="hms/doctor/index.php">
              <img src="images/doctor.jpg" class="card-img-top w-35" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title">You are the doctor?</h5>
              <p class="card-text">You can see the appointments on your charge.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-white bg-success mb-3">
            <a href="hms/admin/index.php">
              <img src="images/admin.jpg" class="card-img-top w-35" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title">We also have a hospital administrator!</h5>
              <p class="card-text">You are the administrator? click here.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><br>


  <div class="container mt-5 col-sm-12 mb-4">

    <!-- Pie de pagina -->
    <footer class="bg-primary text-center text-light fixed-bottom mt-5">
      <div class="text-center p-3" id="barraNav">
        <a class="text-light">Demo 2023 for Huawei, No Rights Deserved</a>
      </div>
    </footer>

    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/funciones.js"></script>
  </div>
</body>

<script>
  // Obtén la tarjeta y el enlace
  const card = document.querySelector('.clickable-card');
  const link = card.querySelector('a');

  // Agrega un evento clic para aplicar y quitar la clase
  card.addEventListener('click', function(event) {
    // Previene el comportamiento predeterminado del enlace
    event.preventDefault();

    // Aplica la clase para la animación al hacer clic
    card.classList.add('clicked');

    // Espera un tiempo antes de redirigir y recargar la página
    setTimeout(function() {
      window.location.href = link.getAttribute('href');
      setTimeout(function() {
        window.location.reload();
      }, 1000); // Espera 1 segundo antes de recargar la página (ajusta el tiempo según tus necesidades)
    }, 300); // 300 milisegundos (0.3 segundos) de espera antes de redirigir
  });
</script>

</html>