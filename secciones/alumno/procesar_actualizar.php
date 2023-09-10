<?php 

    require_once '../../config/database.php';


    $mensaje = '';
    $tipo = '';

    $pdo = Database::conectar();
    $sentencia = $pdo->prepare("SELECT a.id,a.nombre,a.apellido,a.dni,a.telefono,a.usuario_id,u.email FROM alumnos a INNER JOIN usuarios u ON a.usuario_id = u.id WHERE u.id = ? AND a.estado = 1 AND u.estado = 1 LIMIT 1");
    $sentencia->bindParam(1,$_SESSION['usuario_id']);
    $sentencia->execute();
    $alumno = $sentencia->fetch(PDO::FETCH_ASSOC);


    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $usuario_id = $_POST['usuario_id'];
        $password = $_POST['password'];
        $passwordConfirmacion = $_POST['passwordConfirmacion'];

        //Verifica que los campos no estes vacios
        if(empty($nombre) || empty($apellido) || empty($dni) || empty($telefono)){
            $mensaje = "Error: todos los campos son requeridos";
            $tipo = "danger";
        }else{

            //Verifica si el usuario ya existe
            if(count($alumno) > 0){

                //Verifica que ambos campos no esten vacios
                if(isset($password) AND isset($passwordConfirmacion)){

                    //Encripta con un hash la contraseña
                    $password = password_hash($password,PASSWORD_DEFAULT);
    
                    //Verifica que las contraseñas coincidan
                    if(password_verify($passwordConfirmacion,$password)){
                        //Actualizo los datos del usuario en la tabla alumnos
                        $sentencia = $pdo->prepare("UPDATE alumnos SET nombre = ?,apellido = ?,dni = ?,telefono = ? WHERE usuario_id = ? AND estado = 1");
                        $sentencia->bindParam(1,$nombre);
                        $sentencia->bindParam(2,$apellido);
                        $sentencia->bindParam(3,$dni);
                        $sentencia->bindParam(4,$telefono);
                        $sentencia->bindParam(5,$usuario_id);
        
                        if($sentencia->execute()){
                            //Actualiza la contraseña en la tabla de usuarios
                            $sentencia = $pdo->prepare("UPDATE usuarios SET password = ? WHERE id = ? AND estado = 1");
                            $sentencia->bindParam(1,$password);
                            $sentencia->bindParam(2,$usuario_id);
        
                            if($sentencia->execute()){
                                $mensaje = "¡Datos actualizados con éxito!";
                                $tipo = "success";
                            }
                            
                        }
                    }else{
                        $mensaje = "Error: las contraseñas no coinciden";
                        $tipo = "danger";
                    }
                }else{
                    $sentencia = $pdo->prepare("UPDATE alumnos SET nombre = ?,apellido = ?,dni = ?,telefono = ? WHERE usuario_id = ? AND estado = 1");
                    $sentencia->bindParam(1,$nombre);
                    $sentencia->bindParam(2,$apellido);
                    $sentencia->bindParam(3,$dni);
                    $sentencia->bindParam(4,$telefono);
                    $sentencia->bindParam(5,$usuario_id);

                    if($sentencia->execute()){
                        $mensaje = "¡Datos actualizados con éxito!";
                        $tipo = "success";
                    }
                }
            }else{
                //Verifica que ambos campos no esten vacios
                if(isset($password) AND isset($passwordConfirmacion)){
                    $password = password_hash($password,PASSWORD_DEFAULT);
    
                    if(password_verify($passwordConfirmacion,$password)){
                        //Inserto los datos del usuario en la tabla alumnos
                        $sentencia = $pdo->prepare("INSERT INTO alumnos(nombre,apellido,dni,telefono,usuario_id) VALUES(?,?,?,?,?)");
                        $sentencia->bindParam(1,$nombre);
                        $sentencia->bindParam(2,$apellido);
                        $sentencia->bindParam(3,$dni);
                        $sentencia->bindParam(4,$telefono);
                        $sentencia->bindParam(5,$usuario_id);
        
                        if($sentencia->execute()){
                            //Actualiza la contraseña en la tabla de usuarios
                            $sentencia = $pdo->prepare("UPDATE usuarios SET password = ? WHERE id = ? AND estado = 1");
                            $sentencia->bindParam(1,$password);
                            $sentencia->bindParam(2,$usuario_id);
        
                            if($sentencia->execute()){
                                $mensaje = "¡Datos actualizados con éxito!";
                                $tipo = "success";
                            }
                            
                        }
                    }else{
                        $mensaje = "Error: Las contraseñas no coinciden";
                        $tipo = "danger";
                    }
                }else{
                    //Inserto los datos del usuario en la tabla alumnos
                    $sentencia = $pdo->prepare("INSERT INTO alumnos(nombre,apellido,dni,telefono,usuario_id) VALUES(?,?,?,?,?)");
                    $sentencia->bindParam(1,$nombre);
                    $sentencia->bindParam(2,$apellido);
                    $sentencia->bindParam(3,$dni);
                    $sentencia->bindParam(4,$telefono);
                    $sentencia->bindParam(5,$usuario_id);

                    if($sentencia->execute()){
                        $mensaje = "¡Datos actualizados con éxito!";
                        $tipo = "success";
                    }
                }
            }
            
        }
    }