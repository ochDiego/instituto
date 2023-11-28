<?php session_start(); ?>
<?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/instituto"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= $url; ?>/assets/css/bootstrap.min.css">
  <link href="<?= $url; ?>/assets/css/datatables@7.1.2_dist_style.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $url; ?>/assets/css/custom.css">

  <link href="<?= $url; ?>/assets/css/jquery.dataTables.min.css" rel="stylesheet" />

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>ISFTANGACO</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

  <header class="border bg-light shadow sticky-top rounded-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <a href="<?= $url; ?>/index.php" class="text-center text-dark text-decoration-none w-25">
          <img src="<?= $url; ?>/assets/imagenes/logo.png" alt="Logo ISFTA" class="bi me-2 img-fluid w-75" role="img" aria-label="Bootstrap">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

          <li><a href="<?= $url; ?>/index.php" class="nav-link px-2 link-dark">Inicio</a></li>
          <li><a href="<?= $url; ?>#sobreNosotros" class="nav-link px-2 link-dark">Sobre nosotros</a></li>
          <li><a href="<?= $url; ?>#contactanos" class="nav-link px-2 link-dark">Contáctanos</a></li>

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
            <li class="ms-5"><a class="btn btn-outline-dark rounded-pill" href="<?= $url; ?>/secciones/alumno/index.php" class="nav-link px-2 link-light">Panel (Alumno)</a></li>
          <?php endif ?>

        </ul>

        <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == "ok") : ?>

          <a href="#" class="badge d-flex align-items-center p-2 pe-2 bg-white link-dark border border-dark-subtle rounded-pill text-decoration-none dropdown-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <svg class="rounded-circle me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <?= $_SESSION['email']; ?>
          </a>


          <div class="offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h4 class="offcanvas-title display-6 fs-3" id="offcanvasRightLabel">Opciones de Usuario</h4>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-center">

              <div class="d-flex flex-column align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
              </div>

              <h5 class="display-6 fs-4 m-3"><?= $_SESSION['email']; ?><h5>

                  <hr class="dropdown-divider">
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/perfil.php">Mi perfil</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/actualizar_perfil.php">Actualizar mis datos</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/index.php">Carrera</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/admin/cerrar.php">Cerrar sesión</a></li>

            </div>
          </div>



        <?php else : ?>
          <div class="text-end">
            <a href="<?= $url; ?>/secciones/admin/index.php" class="btn btn-outline-dark rounded-pill me-2 py-1">Acceder</a>
          </div>
        <?php endif ?>




      </div>
    </div>
  </header>

  <!-- Alerta se muestra cuano el usuario no está logeado -->
  <?php if (isset($_GET['error'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16" fill="#842029">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
      </svg>
      <svg class="bi flex-shrink-0   me-2" role="img" aria-label="Danger:" height="1.5em" width="1.5em"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <strong>No es posible acceder </strong>, se tiene que loguear para poder ingresar
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif ?>