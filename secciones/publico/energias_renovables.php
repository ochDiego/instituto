
<?php require_once '../../templates/header.php'; ?>

<?php
require_once '../../config/database.php';

$pdo = Database::conectar();
$sentencia = $pdo->query(
                            "SELECT materias.nombre AS materia, carreras.nombre AS carrera, periodo FROM materia_carrera
                            INNER JOIN materias ON materia_carrera.materia_id = materias.id
                            INNER JOIN carreras ON materia_carrera.carrera_id = carreras.id
                            WHERE (materia_carrera.estado = 1) AND (carrera_id = 2) ORDER BY materia_carrera.periodo ASC"
                        );
$materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>


<h2 class="h1 mt-4 text-center">Gestión de energías renovables - Materias</h2>

<div class="card my-4 mx-5 border-0 shadow">

    <div class="card-body">
        <table class="table table-stripped table-hover text-center fs-5 justify-content-center align-items-center">
            <thead>
                <tr>
                    <th class="text-start">Nombre</th>
                    <th class="text-center">Periodo</th>
                    <th class="text-center">Días y Horario de Cursada</th>
                    <th class="text-center">Promocionalidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) : ?>
                    <tr>
                        <td class="text-start"><?= $materia["materia"]; ?></td>
                        <td class="text-center"><?= $materia["periodo"]; ?></td>
                        <td class="text-center">Lunes 18:30 a 20:30hs y Jueves 21:00 a 22:15hs </td>
                        <td class="text-center"><span class="badge rounded-pill bg-warning bg-opacity-10">No disponible</span></td>
                        
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>