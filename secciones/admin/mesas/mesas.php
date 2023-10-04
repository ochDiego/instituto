<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();

    
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
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>