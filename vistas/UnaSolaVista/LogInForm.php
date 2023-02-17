<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CustomCSS -->
  <link rel="stylesheet" href="../../CSS/css.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Inicia sesion</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img class="imagen-logo"
        src="https://imgs.search.brave.com/SqRL3i5t3v7FMy8DX2f0x6G7TJKz9ggP80h817P73BI/rs:fit:1200:1136:1/g:ce/aHR0cDovLzIuYnAu/YmxvZ3Nwb3QuY29t/Ly1KX3lfT1JEZWV5/Yy9WZ0VSQWVtQU9X/SS9BQUFBQUFBQURV/ay9LcndVTkNLS1pX/NC9zMTYwMC9NRURJ/Q0lOQS1WRVRFUklO/QVJJQS12ZWN0b3It/bG9nby5wbmc"
        alt="LogoVeterianria">
      <a class="navbar-brand" href="#">Veterinaria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../index.html">Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-content">
    <form id="frmLogin" name="frmLogin" action="../../controlador/index.LogIn.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
        <input id="inputUsuario" name="inputUsuario" type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
        <input id="inputContra" name="inputContra" type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="submmit">Inicia sesion</button>
        <span>No tienes cuenta? Registrate!</span>
        <button  class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrate</button>
      </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Registrate!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>