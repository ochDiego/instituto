<?php require_once '../templates/header.php'; ?>

<?php require_once 'procesar_registro.php'; ?>

<div id="layoutAuthentication_content">
    
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">


                    <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                        <div class="card-header">
                            <h3 class="text-center text-light font-weight-light my-4">Crear nuevo usuario</h3>
                        </div>
                        <div class="card-body">

                            <?php if(isset($mensaje)): ?>
            
                                    <div class="alert alert-<?= $tipo; ?>" role="alert">
                                            
                                        <strong><?= $mensaje; ?></strong>
                                    </div>
                                        
                            <?php endif ?>

                            <form action="" method="POST" autocomplete="off">
                              
                                <div class="form-floating mb-3">
                                    <input name="email" class="form-control" id="inputEmail" type="email" placeholder="nombre@ejemplo.com"  value="<?= isset($email)?$email : '' ; ?>"/>
                                    <label for="inputEmail">Email</label>
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

                                <div class="form-floating mb-3">
                                    <select name="rol_id" id="rol_id" class="form-control">

                                        <option value="none" selected disabled hidden></option>

                                        <?php foreach($roles as $rol): ?>
                                            <option value="<?= $rol['id']; ?>"><?= $rol['nombre']; ?></option>
                                        <?php endforeach ?>  

                                    </select>
                                    <label for="rol_id">Roles</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-block" type="submit">Crear usuario</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    
    

       


<?php require_once '../templates/header.php'; ?>