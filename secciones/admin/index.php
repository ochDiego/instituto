<?php require_once 'procesar_login.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ISFTANGACO - Acceder</title>
        <link href="/instituto/assets/css/styles.css" rel="stylesheet" />
        <script src="/instituto/assets/js/fontawesome_all" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">

                                    <?php if(isset($mensaje)): ?>
            
                                            <div class="alert alert-danger" role="alert">
                                                    
                                                <strong><?= $mensaje; ?></strong>
                                            </div>
                                                
                                    <?php endif ?>


                                        <form action="" method="POST" autocomplete="off">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="nombre@ejemplo.com" name="email" value="<?= isset($email)?$email:''; ?>" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Contraseña" name="password"/>
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-secondary" href="/instituto/index.php">Ir al sitio</a>
                                                <button type="submit" class="btn btn-primary">Acceder</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ISFTANGACO 2023</div>
                            <div>
                               <!--  <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a> -->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="/instituto/assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/instituto/assets/js/scripts.js"></script>
    </body>
</html>


