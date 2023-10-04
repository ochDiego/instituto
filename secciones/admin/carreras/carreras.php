<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();
        $sentencia = $pdo->query("SELECT * FROM carreras WHERE estado = 1");
        $carreras = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    
    ?>


    <h1 class="mt-4 text-center">Carreras</h1>

    <div class="card my-4">

        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="registrar_carrera.php" role="button">Nueva carrera</a>
        </div>

        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($carreras as $carrera): ?>
                        <tr>
                            <td><?= $carrera["nombre"]; ?></td>
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