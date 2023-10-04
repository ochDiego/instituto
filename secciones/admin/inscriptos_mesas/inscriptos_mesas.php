<?php require_once '../templates/header.php'; ?>

    <?php 
        require_once '../../../config/database.php';

        $pdo = Database::conectar();

    
    ?>


    <h1 class="mt-4 text-center">Inscriptos mesas</h1>

    <div class="card my-4">
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Mesa</th>
                        <th>Alumno</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>

<?php require_once '../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>