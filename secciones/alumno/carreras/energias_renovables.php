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
$notaNum = count($materias)-1;


?>

<div class="col-10">

    <h2 class="mt-4 text-center fs-1">Gestión de Energías Renovables - Materias</h2>

    <div class="card my-3 mx-4">

        <div class="card-body">
            <table class="table table-stripped table-hover text-center fs-5 justify-content-center align-items-center overflow-y-auto">
                <thead>
                    <tr>
                        <th class="text-start">#</th>
                        <th>Materia</th>
                        <th>Periodo</th>
                        <th>Promocionalidad</th>
                        <th>Condición</th>
                        <th class="text-end">Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materias as $materia) : ?>
                        <tr>
                            <td class="text-start"><?= $notaNum; $notaNum++;?></td>
                            <td><?= $materia["materia"]; ?></td>
                            <td><?= $materia["periodo"]; ?></td>
                            <td><span class="badge rounded-pill bg-warning bg-opacity-10">No disponible</span></td>
                            <td><span class="badge rounded-pill bg-success bg-opacity-10"><?= $materia["condicion"]; ?></span></td>

                            <td class="text-end">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-pill py-1" data-bs-toggle="modal" data-bs-target="#modalNotas<?= $materia["idNotas"]; ?>">
                                    Ver
                                </button>

                                <!-- Modal ver notas-->
                                <div class="modal fade" id="modalNotas<?= $materia["idNotas"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $materia["idNotas"]; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalLabel<?= $materia["idNotas"]; ?>">Notas de <?= $materia["materia"]; ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <table class="table table-borderless">
                                                    <thead class="text-center">
                                                        <tr class="table-primary fs-4">
                                                            <th scope="col">1er Parcial</th>
                                                            <th scope="col">Recuperatorio 1er Parcial</th>
                                                            <th scope="col">2do Parcial</th>
                                                            <th scope="col">Recuperatorio 2do Parcial</th>
                                                            <th scope="col">Extraordinario</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center table-info">

                                                            <tr>
                                                                <th class="<?= ($materia["parcial_1"] >= 4) ? 'text-success' : 'text-danger'; ?> fs-3"><?= (empty($materia["parcial_1"])) ? '-' : $materia["parcial_1"]; ?></th>
                                                                <td class="<?= ($materia["recuperatorio_1"] >= 4) ? 'text-success' : 'text-danger'; ?> fs-3"><?= (empty($materia["recuperatorio_1"])) ? '-' : $materia["recuperatorio_1"]; ?></td>
                                                                <td class="<?= ($materia["parcial_2"] >= 4) ? 'text-success' : 'text-danger'; ?> fs-3"><?= (empty($materia["parcial_2"])) ? '-' : $materia["parcial_2"]; ?></td>
                                                                <td class="<?= ($materia["recuperatorio_2"] >= 4) ? 'text-success' : 'text-danger'; ?> fs-3"><?= (empty($materia["recuperatorio_2"])) ? '-' : $materia["recuperatorio_2"]; ?></td>
                                                                <td class="<?= ($materia["extraordinario"] >= 4) ? 'text-success' : 'text-danger'; ?> fs-3"><?= (empty($materia["extraordinario"])) ? '-' : $materia["extraordinario"]; ?></td>
                                                            </tr>

                                                    </tbody>
                                                </table>

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