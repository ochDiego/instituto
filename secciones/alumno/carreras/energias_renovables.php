<?php require_once '../templates/header.php'; ?>

<?php
require_once '../../../config/database.php';

$usuarioId = $_SESSION['usuario_id'];

$pdo = Database::conectar();
$sentencia = $pdo->query(
    "SELECT materia_nota.id AS idNotas, parcial_1,recuperatorio_1,parcial_2,recuperatorio_2,extraordinario, periodo, alumnos.nombre as alumno, usuario_id, condicion.nombre as condicion, materias.nombre as materia FROM materia_nota 
                            INNER JOIN materias ON materia_nota.materia_id = materias.id 
                            INNER JOIN alumnos ON materia_nota.alumno_id = alumnos.id
                            INNER JOIN materia_carrera ON materia_carrera.materia_id = materia_nota.materia_id
                            INNER JOIN condicion ON materia_nota.condicion_id = condicion.id
                            WHERE (materia_carrera.estado = 1) AND (carrera_id = 2) AND (usuario_id= $usuarioId)"
);
$materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
$notaNum = 0;


?>

<div class="col">

    <h2 class="mt-4 text-center fs-1">Gestión de Energías renovables - Materias</h2>

    <div class="card my-3 mx-4 shadow-lg border-0 p-3">

        <div class="card-body">
            <table class="table table-stripped table-hover text-center fs-5 justify-content-center align-items-center overflow-y-auto my-4 pt-2">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Materia</th>
                        <th class="text-center">Periodo</th>
                        <th class="text-center">Promocionalidad</th>
                        <th class="text-center">Condición</th>
                        <th class="text-center">Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materias as $materia) : ?>
                    <?php $notaNum++; ?>
                        <tr>
                            <td class="text-center"><?= $notaNum;?></td>
                            <td class="text-center"><?= $materia["materia"]; ?></td>
                            <td class="text-center"><?= $materia["periodo"]; ?></td>
                            <td class="text-center"><span class="badge rounded-pill bg-warning bg-opacity-75">No disponible</span></td>
                            <td class="text-center"><span class="badge rounded-pill bg-success bg-opacity-75"><?= $materia["condicion"]; ?></span></td>

                            <td class="text-center">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-pill py-1" data-bs-toggle="modal" data-bs-target="#modalNotas<?= $materia["idNotas"]; ?>">
                                    Ver
                                </button>

                                <!-- Modal ver notas-->
                                <div class="modal fade" id="modalNotas<?= $materia["idNotas"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $materia["idNotas"]; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h1 class="modal-title fs-3 w-100" id="exampleModalLabel<?= $materia["idNotas"]; ?>">Notas de <?= $materia["materia"]; ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">

                                                <div class="row text-center">
                                                    <div class="col"><b>1er Parcial</b></div>
                                                    <div class="col"><b>Recuperatorio 1er Parcial</b></div>
                                                    <div class="col"><b>2do Parcial</b></div>
                                                    <div class="col"><b>Recuperatorio 2do Parcial</b></div>
                                                    <div class="col"><b>Extraordinario</b></div>
                                                </div>
                                                <hr class="text-secondary">
                                                <div class="row text-center">

                                                    <div class="col <?= ($materia["parcial_1"] >= 4) ? 'text-success' : 'text-danger'; ?>"><?= (empty($materia["parcial_1"])) ? '-' : $materia["parcial_1"]; ?></div>
                                                    <div class="col <?= ($materia["recuperatorio_1"] >= 4) ? 'text-success' : 'text-danger'; ?>"><?= (empty($materia["recuperatorio_1"])) ? '-' : $materia["recuperatorio_1"]; ?></div>
                                                    <div class="col <?= ($materia["parcial_2"] >= 4) ? 'text-success' : 'text-danger'; ?>"><?= (empty($materia["parcial_2"])) ? '-' : $materia["parcial_2"]; ?></div>
                                                    <div class="col <?= ($materia["recuperatorio_2"] >= 4) ? 'text-success' : 'text-danger'; ?>"><?= (empty($materia["recuperatorio_2"])) ? '-' : $materia["recuperatorio_2"]; ?></div>
                                                    <div class="col <?= ($materia["extraordinario"] >= 4) ? 'text-success' : 'text-danger'; ?>"><?= (empty($materia["extraordinario"])) ? '-' : $materia["extraordinario"]; ?></div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>