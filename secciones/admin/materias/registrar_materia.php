<?php require_once '../templates/header.php'; ?>

    <?php 
        

    ?>

    <h1 class="mt-4 text-center">Crear nueva materia</h1>

    <div class="row my-4">
        <div class="col-10 mx-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">

                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="fechaInicio" class="form-label">Nombre:</label>
                                    <input type="text" name="materia" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Ingrese el nombre de la materia</small>
                                </div>
                            </div>

                            <div class="col-4"></div>
                          

                            <div class="col-6">
                               <button type="submit" class="btn btn-primary">Crear materia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>