<?php

    require_once '../../../config/database.php';
    

    $pdo = Database::conectar();
    $sentencia = $pdo->query("SELECT * FROM roles ORDER BY id DESC");
    $roles = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmacion = $_POST['passwordConfirmacion'];
        $rol_id = $_POST['rol_id'];

        $mensaje = '';

        //Verifica que los campos no esten vacios
        if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['passwordConfirmacion'])){
            $mensaje = "Error: todos los campos son requeridos";
        }else{
            //Verifica si existe el email
            $sentencia = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
            $sentencia->bindParam(1,$email);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            if($resultado){
                $mensaje = "Error: el email ya existe, ingrese otro por favor.";
            }

            $password = password_hash($password,PASSWORD_DEFAULT);


            //verifica que coincidan las contraseñas, en caso afirmativo se registra el usuario en la base de datos
            if(password_verify($passwordConfirmacion,$password)){
                $sentencia = $pdo->prepare("INSERT INTO usuarios(email,password,rol_id) VALUES(?,?,?)");
                $sentencia->bindParam(1,$email);
                $sentencia->bindParam(2,$password);
                $sentencia->bindParam(3,$rol_id);

                if($sentencia->execute()){
                    
                    $_SESSION['info'] = "Usuario creado con éxito!";

                    header('location:usuarios.php');
                }
            }
        }
    }

