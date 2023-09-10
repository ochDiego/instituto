<?php 

    require_once '../../config/database.php';

    $pdo = Database::conectar();

    $sentencia = $pdo->prepare("SELECT a.id,a.nombre,a.apellido,a.dni,a.telefono FROM alumnos a INNER JOIN usuarios u ON a.usuario_id = u.id WHERE u.id = ? AND a.estado = 1 AND u.estado = 1 LIMIT 1");
    $sentencia->bindParam(1,$_SESSION['usuario_id']);
    $sentencia->execute();
    $alumno = $sentencia->fetch(PDO::FETCH_ASSOC);