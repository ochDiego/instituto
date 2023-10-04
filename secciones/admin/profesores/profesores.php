<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();

        $sentencia =  $pdo->query("SELECT * FROM profesores WHERE estado = 1");
        $profesores = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>


    <h1 class="mt-4 text-center">Lista de profesores</h1>

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
                    <?php foreach($profesores as $profesor): ?>
                        <tr>
                            <td><?= $profesor["dni"]; ?></td>
                            <td><?= $profesor["nombre"]; ?></td>
                            <td><?= $profesor["apellido"]; ?></td>
                            <td><?= $profesor["telefono"]; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>