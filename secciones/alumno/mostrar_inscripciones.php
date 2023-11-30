<?php require_once './templates/header.php'; ?>

<?php
require_once '../../config/database.php';

$pdo = Database::conectar();
$sentencia = $pdo->query("SELECT i.id AS id, i.fecha AS fecha, i.mesa_examen_id AS mesa_examen_id, a.nombre AS alumno, a.apellido AS apellido, m.nombre AS materia, p.nombre AS profesor, mc.periodo AS ciclo_lectivo, c.nombre AS carrera FROM inscripcion_mesa i JOIN mesa_examen e ON e.id= i.mesa_examen_id JOIN alumnos a ON a.id= i.alumno_id JOIN materias m ON m.id = e.materia_id JOIN profesores p ON p.id = e.profesor_id JOIN materia_carrera mc ON mc.id = e.materia_id JOIN carreras c ON c.id = e.carrera_id WHERE i.estado = 1;");
$alumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>


<h1 class="mt-4 text-center">Inscripciones</h1>

<div class="ms-4 mt-3">

    <a href='<?= $url; ?>/secciones/alumno/mesas_examen.php' class="btn btn-outline-dark  rounded-pill me-1 px-3">
        <div class="d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
            </svg>
            Volver
        </div>
    </a>

    <a href="<?= $url; ?>/secciones/alumno/fpdf/Prueba.php" target="_blank" class="btn btn-outline-success  rounded-pill me-1 px-3">
        <div class="d-flex justify-content-center align-items-center">
            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
            </svg>
            Descargar comprobante
        </div>
    </a>

    <a href="<?= $url; ?>/secciones/alumno/fpdf/baja.php" target="_blank" class="btn btn-outline-danger rounded-pill px-3">
        <div class="d-flex justify-content-center align-items-center">
            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
            </svg>
            Descargar comprobante de Bajas
        </div>
    </a>

</div>

<div class="card-body my-3 mx-4 shadow-lg border-0 p-3">
    <table class="table table-stripped table-hover text-center justify-content-center align-items-center overflow-y-auto my-4 pt-2">
        <thead>
            <tr>
                <th class="text-center">Inscripción N°</th>
                <th class="text-center">Fecha de Inscripcion</th>
                <th class="text-center">Mesa N°</th>
                <th class="text-center">Nombre del Alumno/a</th>
                <th class="text-center">Apellido del Alumno/a</th>
                <th class="text-center">Materia</th>
                <th class="text-center">Profesor</th>
                <th class="text-center">Ciclo Lectivo</th>
                <th class="text-center">Carrera</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno) : ?>
                <tr>
                    <td class="text-center"><?= $alumno['id']; ?></td>
                    <td class="text-center"><?= $alumno['fecha']; ?></td>
                    <td class="text-center"><?= $alumno['mesa_examen_id']; ?></td>
                    <td class="text-center"><?= $alumno['alumno']; ?></td>
                    <td class="text-center"><?= $alumno['apellido']; ?></td>
                    <td class="text-center"><?= $alumno['materia']; ?></td>
                    <td class="text-center"><?= $alumno['profesor']; ?></td>
                    <td class="text-center"><?= $alumno['ciclo_lectivo']; ?></td>
                    <td class="text-center"><?= $alumno['carrera']; ?></td>
                    <td class="text-center">
                        <a name="" id="" class="btn btn-primary rounded-pill px-3 btn-sm" href="<?= $url; ?>/secciones/alumno/baja.php?id=<?php echo $alumno['id'] ?>" role="button"><b>Dar baja</b></a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</div>

<?php require_once './templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>