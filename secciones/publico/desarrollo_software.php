
<?php require_once '../../templates/header.php'; ?>

<?php
require_once '../../config/database.php';

$pdo = Database::conectar();
$sentencia = $pdo->query("SELECT m.nombre AS materia, c.nombre AS carrera FROM materias m JOIN materia_carrera mc ON m.id = mc.materia_id JOIN carreras c ON c.id = mc.carrera_id WHERE m.estado = 1 AND mc.estado = 1 AND c.estado = 1");
$materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<h2>Desarrollo de Software (Público)</h2>
<h1 class="mt-4 text-center">Desarrollo de Software - Materias</h1>

<div class="card my-4 mx-5">

    <div class="card-body">
        <table class="table table-stripped text-center fs-5 justify-content-center align-items-center">
            <thead>
                <tr>
                    <th class="text-start">Nombre</th>
                    <th>Días y Horario de Cursada</th>
                    <th>Promocionalidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) : ?>
                    <tr>
                        <td class="text-start"><?= $materia["materia"]; ?></td>
                        <td>Lunes 18:30 a 20:30hs y Jueves 21:00 a 22:15hs </td>
                        <td><span class="badge rounded-pill bg-warning bg-opacity-10">No disponible</span></td>
                        
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>