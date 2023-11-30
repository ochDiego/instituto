<?php require_once './templates/header.php'; ?>

<?php
require_once '../../config/database.php';

$pdo = Database::conectar();
$sentencia = $pdo->query("SELECT * FROM alumnos WHERE estado = 1");
$alumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);


$id = ($_GET['iduser']);

?>

<h2 class="h1 mt-4 text-center">Inscripción</h2>

<a href='<?= $url; ?>/secciones/alumno/mesas_examen.php' class="btn btn-outline-dark rounded-pill px-3 ms-4 mt-3">
    <div class="d-flex justify-content-center align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
            <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
        </svg>
        Volver
    </div>
</a>

<div class="container py-3">

    <div class="row">
        <div class="col col-md-8 mx-auto">

            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="card rounded-3 border-0 shadow-lg p-3">
                        <div class="card-body border-0">
                            
                        <?php require_once 'procesar_inscripcion.php'; ?>
                        
                            <form action="" method="post">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="fechaInicio" class="form-label">Fecha de Inscripción</label>
                                            <input type="date" name="fechaInicio" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted">Fecha del momento de inscripción</small>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Alumno/a</label>
                                            <input type="hidden" name="id_mesa" value="<?php echo $id; ?>">
                                            <select class="form-select form-select-md" name="alumno">

                                                <option value="none" selected disabled hidden></option>

                                                <?php foreach ($alumnos as $alumno) : ?>
                                                    <option value="<?= $alumno["id"]; ?>"><?= $alumno["nombre"]; ?><?= $alumno["apellido"]; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>




                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>



                <?php require_once './templates/footer.php'; ?>