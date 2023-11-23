<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/instituto/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/instituto/assets/css/custom.css">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>ISFTANGACO</title>
   <link href="<?= $url; ?>/assets/css/datatables@7.1.2_dist_style.min.css" rel="stylesheet" />
        <link href="<?= $url; ?>/assets/css/styles.css" rel="stylesheet" />
        <script src="<?= $url; ?>/assets/js/fontawesome_all.js crossorigin="anonymous></script>
        <link href="<?= $url; ?>/assets/css/jquery.dataTables.min.css" rel="stylesheet" />
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

  <header class="border bg-light sticky-top rounded-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/instituto"; ?>

        <a href="<?= $url; ?>/index.php" class="text-center text-dark text-decoration-none w-25">
          <img src="/instituto/assets/imagenes/logo.png" alt="Logo ISFTA" class="bi me-2 img-fluid w-75" role="img" aria-label="Bootstrap">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

          <li><a href="/instituto/index.php" class="nav-link px-2 link-dark">Inicio</a></li>       

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
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/carreras/carreras.php">Carrera</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/admin/cerrar.php">Cerrar sesión</a></li>

            </div>
          </div>



        <?php else : 
          header('location: '.$url.'/index.php');
        endif ?>




      </div>
    </div>

  </header>

  <section class="container-xxl">
    <div class="row">
        <aside class="col-2 bd-sidebar fs-4 bg-light text-dark shadow-lg border-0 rounded-end" style="height:89vh !important;">
            <div class="row">
                <div class="col mt-5">
                  <a class="dropdown-item text-start rounded-3 px-1" href="<?= $url; ?>/secciones/alumno/carreras/carreras.php">Carrera</a>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                  <a class="dropdown-item text-start rounded-3 px-1" href="#">Mesas de exámen</a>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                  <a class="dropdown-item text-start rounded-3 px-1" href="<?= $url; ?>/secciones/alumno/perfil.php">Mi perfil</a>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                  <a class="dropdown-item text-start rounded-3 px-1" href="<?= $url; ?>/secciones/admin/cerrar.php">Cerrar sesión</a>
                </div>
            </div>
        </aside>