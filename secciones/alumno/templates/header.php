<?php session_start(); ?>
<?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/instituto"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= $url; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $url; ?>/assets/css/custom.css">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>ISFTANGACO</title>
  <link href="<?= $url; ?>/assets/css/datatables@7.1.2_dist_style.min.css" rel="stylesheet" />
  <!-- <link href="<?= $url; ?>/assets/css/styles.css" rel="stylesheet" /> -->
  <script src="<?= $url; ?>/assets/js/fontawesome_all.js crossorigin=" anonymous"></script>
  <link href="<?= $url; ?>/assets/css/jquery.dataTables.min.css" rel="stylesheet" />
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


  <header class="border bg-light shadow sticky-top rounded-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <a href="<?= $url; ?>/index.php" class="text-center text-dark text-decoration-none w-25">
          <img src="<?= $url; ?>/assets/imagenes/logo.png" alt="Logo ISFTA" class="bi me-2 img-fluid w-75" role="img" aria-label="Bootstrap">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

          <li class="ms-2">

            <a class="btn btn-outline-dark rounded-pill d-flex justify-content-center align-items-center px-3" href="<?= $url; ?>/secciones/alumno/index.php">
              <svg class="me-2" xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="gray" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8H32c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9V104l4.4-1.6L240.1 4.2zM64 224h64V416h40V224h64V416h48V224h64V416h40V224h64V420.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V224z" />
              </svg>
              Carrera
            </a>

          </li>
          <li class="ms-2">
            <a class="btn btn-outline-dark rounded-pill d-flex justify-content-center align-items-center px-3" href="<?= $url; ?>/secciones/alumno/mesas_examen.php">
              <svg class="me-2" xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="gray" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
              </svg>
              Mesas
            </a>
          </li>

        </ul>

        <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == "ok") : ?>
          <a class="btn btn-outline-dark rounded-pill me-5" href="<?= $url; ?>" class="nav-link px-2 link-light">Volver ISFTA</a>
        <?php endif ?>

        <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == "ok") : ?>

          <a href="#" class="badge d-flex align-items-center p-2 pe-2 bg-white link-dark border border-dark-subtle rounded-pill text-decoration-none dropdown-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <svg class="rounded-circle me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <?= $_SESSION['email']; ?>
          </a>


          <div class="offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header text-center">
              <h4 class="offcanvas-title display-6 fs-2 w-100" id="offcanvasRightLabel"><?= $_SESSION['rol']; ?></h4>
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
                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/perfil.php">
                    <div class="d-flex justify-content-center align-items-center fs-5">
                      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                      </svg>
                      Mi perfil
                    </div>
                  </a>

                  <hr class="dropdown-divider">

                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/alumno/actualizar_perfil.php">
                    <div class="d-flex justify-content-center align-items-center fs-5">
                      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V454.8c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                      </svg>
                      Actualizar perfil
                    </div>
                  </a>

                  <hr class="dropdown-divider">

                  <a class="dropdown-item rounded-3" href="<?= $url; ?>/secciones/admin/cerrar.php">
                    <div class="d-flex justify-content-center align-items-center fs-5">

                      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
                      </svg>

                      Cerrar sesión

                    </div>
                  </a>

            </div>
          </div>



        <?php else : ?>

          <!-- Alerta verifica que el usuario este logeado -->
          <?php header('location:' . $url . '?error'); ?>

        <?php endif ?>




      </div>
    </div>
  </header>

  <!-- Alerta de bienvenida se muestra cuano el usuario tiene todos los datos de perfil -->
  <!-- <?php //if (isset($_GET['ok'])) : 
        ?>
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
      </svg>
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" height="1.5em" width="1.5em">
        <use xlink:href="#success" />
      </svg>
      Te damos la bienvenida <strong><?= $alumno['nombre']; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php //endif 
  ?> -->