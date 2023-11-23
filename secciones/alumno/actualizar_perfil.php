<?php require_once './templates/header.php'; ?>

    <?php require_once 'procesar_actualizar.php'; ?>

    <div class="col-10">

        <div class="row">
            <h3 class="mt-4 text-center fs-1">Editar perfil</h3>

            <div class="col-17 col-md-8 mx-auto">
                <div class="card shadow-lg border-0 rounded-lg mt-5 p-5 bg-light">
                    <div class="card-body">
                                        
                                        <?php if($mensaje != ''): ?>
            
                                            <div class="alert alert-<?= $tipo; ?> alert-dismissible fade show" role="alert">
                                                <strong><?= $mensaje; ?></strong>
                                            </div>
                                            
                                        <?php endif ?>

                                        <form action="" method="POST" autocomplete="off">

                                        <input type="hidden" name="usuario_id" value="<?= $_SESSION['usuario_id'] ?>">

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="nombre" class="form-control fs-4" id="inputFirstName" type="text" value="<?= (isset($nombre))?$nombre : ((isset($alumno['nombre'])) ? $alumno['nombre'] : '') ?>"/>
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="apellido" class="form-control fs-4" id="inputLastName" type="text" value="<?= (isset($apellido))?$apellido : ((isset($alumno['apellido'])) ? $alumno['apellido'] : '') ?>"/>
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="dni" class="form-control fs-4" id="inputPassword" type="number" value="<?= (isset($dni))?$dni : ((isset($alumno['dni'])) ? $alumno['dni'] : '') ?>"/>
                                                        <label for="inputPassword">DNI:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="telefono" class="form-control fs-4" id="inputPasswordConfirm" type="text" value="<?= (isset($telefono))?$telefono : ((isset($alumno['telefono'])) ? $alumno['telefono'] : '') ?>"/>
                                                        <label for="inputPasswordConfirm">Teléfono</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control fs-4" id="inputPassword" type="password" placeholder="Contraseña"/>
                                                        <label for="inputPassword">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="passwordConfirmacion" class="form-control fs-4" id="inputPasswordConfirm" type="password" placeholder="Confirmar contraseña"/>
                                                        <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-block">
                                                    <button class="btn btn-outline-dark fs-4 w-100" type="submit">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                                   
                </div>
            </div>
        </div>

    </div>

<?php require_once './templates/footer.php'; ?>