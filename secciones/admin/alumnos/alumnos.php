<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();

        $sentencia =  $pdo->query("SELECT * FROM alumnos WHERE estado = 1");
        $alumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>


    <h1 class="mt-4 text-center">Lista de alumnos</h1>

    <div class="card my-4">
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($alumnos as $alumno): ?>
                        <tr>
                            <td><?= $alumno["dni"]; ?></td>
                            <td><?= $alumno["nombre"]; ?></td>
                            <td><?= $alumno["apellido"]; ?></td>
                            <td><?= $alumno["telefono"]; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>