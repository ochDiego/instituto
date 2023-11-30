<?php require_once '../templates/header.php'; ?>


    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();

        $sentencia = $pdo->query("SELECT * FROM materias WHERE estado = 1");
        $materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia2 = $pdo->query("SELECT * FROM profesores WHERE estado = 1");
        $profesores = $sentencia2->fetchAll(PDO::FETCH_ASSOC);

        $sentencia3 = $pdo->query("SELECT * FROM carreras WHERE estado = 1");
        $carreras = $sentencia3->fetchAll(PDO::FETCH_ASSOC);

        $sentencia4 = $pdo->query("SELECT * FROM materia_carrera WHERE estado = 1");
        $ciclosLectivos = $sentencia4->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <h1 class="mt-4 text-center">Crear nueva mesa</h1>

    <div class="row my-4">
        <div class="col-10 mx-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="fechaInicio" class="form-label">Fecha inicio:</label>
                                    <input type="date" name="fechaInicio" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Fecha de apertura de las inscripciones</small>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="fechafin" class="form-label">Fecha fin:</label>
                                    <input type="date" name="fechafin" id="fechafin" class="form-control" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Fecha de cierra de las incripciones</small>
                                </div>
                            </div>

                            <div class="col-6">
                               <div class="mb-3">
                                <label for="" class="form-label">Materia:</label>
                                <select class="form-select form-select-md" name="materia">

                                    <option value="none" selected disabled hidden></option>

                                    <?php foreach($materias as $materia): ?>
                                        <option value="<?= $materia["id"]; ?>"><?= $materia["nombre"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                               </div>
                            </div>

                            <div class="col-6">
                               <div class="mb-3">
                                <label for="" class="form-label">Profesor:</label>
                                <select class="form-select form-select-md" name="profe" id="profe">

                                    <option value="none" selected disabled hidden></option>

                                    <?php foreach($profesores as $profesor): ?>
                                        <option value="<?= $profesor["id"]; ?>"><?= $profesor["nombre"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                               </div>
                            </div>
                            
                            <div class="col-6">
                               <div class="mb-3">
                                <label for="" class="form-label">Carrera:</label>
                                <select class="form-select form-select-md" name="carrera" id="carrera">

                                    <option value="none" selected disabled hidden></option>

                                    <?php foreach($carreras as $carrera): ?>
                                        <option value="<?= $carrera["id"]; ?>"><?= $carrera["nombre"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                               </div>
                            </div>

                            <div class="col-6">
                               <div class="mb-3">
                                <label for="" class="form-label">Ciclo lectivo:</label>
                                <select class="form-select form-select-md" name="ciclo" id="ciclo">

                                        <option value="none" selected disabled hidden></option>

                                    <?php foreach($ciclosLectivos as $cicloLectivo): ?>
                                        <option value="<?= $cicloLectivo["id"]; ?>"><?= $cicloLectivo["periodo"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                               </div>
                            </div>

                            <div class="col-6">
                               <button type="submit" class="btn btn-primary">Crear mesa</button>
                            </div>
                        </div>
                    </form>
                    <?php require_once 'procesar_registro.php'; ?>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>