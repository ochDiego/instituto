<?php 

    require_once '../../config/database.php';

    $pdo = Database::conectar();

    //Recupera la informacion del profesor de acuerdo a su usuario
    $sentencia = $pdo->prepare("SELECT p.id,p.nombre,p.apellido,p.dni,p.telefono FROM profesores p INNER JOIN usuarios u ON p.usuario_id = u.id WHERE u.id = ? AND p.estado = 1 AND u.estado = 1 LIMIT 1");
    $sentencia->bindParam(1,$_SESSION['usuario_id']);
    $sentencia->execute();
    $profesor = $sentencia->fetch(PDO::FETCH_ASSOC);