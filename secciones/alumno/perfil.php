<?php require_once './templates/header.php'; ?>

    <?php require_once 'procesar_perfil.php'; ?>

    <div class="container">
        <div class="row justify-content-md-center">
                <h2 class="text-center mt-4 fs-1">Mi perfil (<small> <?= $_SESSION['rol']; ?> </small>)</h1>
                <div class="col-8 fs-5 shadow-lg rounded mt-2 px-2 py-4 text-center">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
            
                    <p class="mt-2"><b>Nombre de usuario:</b>  <?= $_SESSION['email']; ?></p>
                    <p><b>Nombre:</b>  <?= (isset($alumno['nombre']))?$alumno['nombre'] : ''; ?></p>
                    <p><b>Apellido:</b>  <?= (isset($alumno['apellido']))?$alumno['apellido'] : ''; ?></p>
                    <p><b>DNI:</b>  <?= (isset($alumno['dni']))?$alumno['dni'] : ''; ?></p>
                    <p><b>Teléfono:</b>  <?= (isset($alumno['telefono']))?$alumno['telefono'] : ''; ?></p>

                    <a href="<?= $url; ?>/secciones/alumno/actualizar_perfil.php" class="btn btn-outline-dark fs-4">Actualizar perfil</a>
                </div>
        </div>
    </div>

<?php require_once './templates/footer.php'; ?>