<?php require_once '../templates/header.php'; ?>

<?php 
     require_once '../../../config/database.php';

     $pdo = Database::conectar();
     $sentencia = $pdo->query("SELECT u.id, u.email, u.password, u.fecha, r.nombre AS rol FROM usuarios U JOIN roles R ON U.rol_id = R.id WHERE U.estado = 1 AND R.estado = 1 ORDER BY U.id DESC");
     $usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

        <h1 class="mt-4 text-center">Lista de usuarios</h1>

        <div class="card my-4">
            <div class="card-header">
                <a name="" id="" class="btn btn-primary" href="registrar_usuario.php" role="button">Nuevo usuario</a>
            </div>
            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Fecha de creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['email']; ?></td>
                                <td><?= $usuario['rol']; ?></td>
                                <td><?= $usuario['fecha']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    
    <?php require_once '../templates/footer.php'; ?>

    <script src="<?= $url; ?>/assets/js/dataTables.js"></script>