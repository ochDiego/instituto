<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/instituto/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/instituto/assets/css/custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>ISFTANGACO</title>
</head>
<body>

  <header class="mb-3 border-bottom bg-light shadow" style="position:sticky; position:-webkit-sticky; top:0; z-index:1000;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/instituto"; ?>

        <a href="<?= $url; ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src="/instituto/assets/imagenes/isft.jfif" alt="Logo ISFTA" class="bi me-2 img-fluid"   role="img" aria-label="Bootstrap">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
          <li><a href="/instituto/index.php" class="nav-link px-2 link-secondary">ISFTANGACO</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Sobre nosotros</a></li>
          <li><a href="<?= $url; ?>#contacto" class="nav-link px-2 link-dark">Contáctanos</a></li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Carreras
                  <i class="fas fa-user fa-fw"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= $url; ?>#desarrolloSoftware">Tecnicatura Superior en Desarrollo de Software</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?= $url; ?>#energiasRenovables">Tecnicatura Superior en Gestión de Energías Renovables</a></li>
              </ul>
          </li>

          <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == "ok") : ?>
            <li class="border-2 rounded-3 bg-primary ms-5"><a href="<?= $url; ?>/secciones/alumno/carreras/carreras.php" class="nav-link px-2 link-light">Mis Carreras</a></li>
          <?php endif ?>

        </ul>

        <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == "ok") : ?>
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['email']; ?>
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="<?= $url; ?>/secciones/alumno/perfil.php">Mi perfil</a></li>
              <li><a class="dropdown-item" href="<?= $url; ?>/secciones/alumno/actualizar_perfil.php">Actualizar mis datos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?= $url; ?>/secciones/admin/cerrar.php">Cerrar sesión</a></li>
            </ul>
          </div>
        <?php else : ?>
          <div class="text-end">
            <a href="<?= $url; ?>/secciones/admin/index.php" class="btn btn-outline-secondary me-2">Acceder</a>
          </div>
        <?php endif ?>


      </div>
    </div>
  </header>