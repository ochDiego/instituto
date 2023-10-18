<?php require_once '../../../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();
        $sentencia = $pdo->query("SELECT m.nombre AS materia, c.nombre AS carrera FROM materias m JOIN materia_carrera mc ON m.id = mc.materia_id JOIN carreras c ON c.id = mc.carrera_id WHERE m.estado = 1 AND mc.estado = 1 AND c.estado = 1");
        $materias = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    
    ?>


    <h1 class="mt-4 text-center">Desarrollo de Software - Materias</h1>

    <div class="card my-4 mx-5">

        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($materias as $materia): ?>
                        <tr>
                            <td><?= $materia["materia"]; ?></td>
                            <td><span class="badge rounded-pill bg-success">Cursando</span></td>
                            <td width="125px">
                                <a name="" id="" class="btn btn-info btn-sm" href="#" role="button">Ver</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../../../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>