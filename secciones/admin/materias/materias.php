<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();
        $sentencia = $pdo->query("SELECT m.nombre AS materia, c.nombre AS carrera FROM materias m JOIN materia_carrera mc ON m.id = mc.materia_id JOIN carreras c ON c.id = mc.carrera_id WHERE m.estado = 1 AND mc.estado = 1 AND c.estado = 1");
        $materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    
    ?>


    <h1 class="mt-4 text-center">Materias</h1>

    <div class="card my-4">

        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="registrar_materia.php" role="button">Nueva materia</a>
        </div>

        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($materias as $materia): ?>
                        <tr>
                            <td><?= $materia["materia"]; ?></td>
                            <td><?= $materia["carrera"]; ?></td>
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