<?php require_once '../../templates/header.php'; ?>

    <?php require_once 'procesar_actualizar.php'; ?>

    <div class="container py-3">

        <div class="row">
            <div class="col-17 col-md-8 mx-auto">
                <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                    <div class="card-header">
                        <h3 class="text-center text-light font-weight-light my-4">Editar perfil</h3>
                    </div>
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
                                                        <input name="nombre" class="form-control" id="inputFirstName" type="text" value="<?= (isset($nombre))?$nombre : ((isset($profesor['nombre'])) ? $profesor['nombre'] : '') ?>"/>
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="apellido" class="form-control" id="inputLastName" type="text" value="<?= (isset($apellido))?$apellido : ((isset($profesor['apellido'])) ? $profesor['apellido'] : '') ?>"/>
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="dni" class="form-control" id="inputPassword" type="number" value="<?= (isset($dni))?$dni : ((isset($profesor['dni'])) ? $profesor['dni'] : '') ?>"/>
                                                        <label for="inputPassword">DNI:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="telefono" class="form-control" id="inputPasswordConfirm" type="text" value="<?= (isset($telefono))?$telefono : ((isset($profesor['telefono'])) ? $profesor['telefono'] : '') ?>"/>
                                                        <label for="inputPasswordConfirm">Teléfono</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Contraseña"/>
                                                        <label for="inputPassword">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="passwordConfirmacion" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar contraseña"/>
                                                        <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                                   
                </div>
            </div>
        </div>

    </div>

<?php require_once '../../templates/footer.php'; ?>