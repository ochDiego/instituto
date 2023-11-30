<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();
        $sentencia =  $pdo->query("SELECT e.fecha_inicio AS fi, e.fecha_fin AS ff, m.nombre AS materia, p.nombre AS profesor, mc.periodo AS ciclo_lectivo, c.nombre AS carrera FROM mesa_examen e 
         JOIN materias m ON m.id = e.materia_id 
         JOIN profesores p ON p.id = e.profesor_id 
         JOIN materia_carrera mc ON mc.id = e.materia_id 
         JOIN carreras c ON c.id = e.carrera_id 
         
        WHERE e.estado = 1 ");
        $mesas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>


    <h1 class="mt-4 text-center">Mesas</h1>

    <div class="card my-4">

        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="registrar_mesa.php" role="button">Nueva mesa</a>
        </div>

        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Materia</th>
                        <th>Profesor</th>
                        <th>Ciclo lectivo</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($mesas as $mesa):?>
                   <tr>
                        <td><?= $mesa['fi']; ?></td>
                        <td><?= $mesa['ff']; ?></td>
                        <td><?= $mesa['materia']; ?></td>
                        <td><?= $mesa['profesor']; ?></td>
                        <td><?= $mesa['ciclo_lectivo']; ?></td> 
                        <td><?= $mesa['carrera']; ?></td>
                        <td width="125px">
                                <a name="" id="" class="btn btn-info btn-sm" href="#" role="button">Editar</a>

                                <a name="" id="" class="btn btn-danger btn-sm" href="#" role="button">Eliminar</a>
                            </td>
                                               
                   </tr>
                   <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>