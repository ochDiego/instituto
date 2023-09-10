<?php  
    session_start();
    require_once '../../config/database.php';

    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $mensaje='';

        //Verifica que los campos no esten vacios
        if(empty($email) || empty($password)){
            $mensaje = "Error: Todos los campos son requeridos";
        }else{
            //Verificar si el usuario existe
            $pdo = Database::conectar();
            $sentencia = $pdo->prepare("SELECT u.id,u.email,u.password,r.id AS rol_id, r.nombre AS rol FROM usuarios u JOIN roles r ON u.rol_id = r.id WHERE u.email = ? AND r.estado = 1 AND u.estado = 1 LIMIT 1");
            $sentencia->bindParam(1,$email);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            if(!$resultado){
                $mensaje = "Error: Usuario incorrecto";
            }else{
                if(password_verify($password,$resultado["password"])){
                
                    switch ($resultado["rol"]) {
                        case 'Alumno':
                            $_SESSION['usuario_id'] = $resultado['id'];
                            $_SESSION['email'] = $resultado['email'];
                            $_SESSION['password'] = $resultado['password'];
                            $_SESSION['rol_id'] = $resultado['rol_id'];
                            $_SESSION['rol'] = $resultado['rol'];
                            $_SESSION['logueado'] = "ok";
    
                            header('location:../alumno/actualizar_perfil.php');
                            break;
                        case 'Profesor':
                            $_SESSION['usuario_id'] = $resultado['id'];
                            $_SESSION['email'] = $resultado['email'];
                            $_SESSION['password'] = $resultado['password'];
                            $_SESSION['rol_id'] = $resultado['rol_id'];
                            $_SESSION['rol'] = $resultado['rol'];
                            $_SESSION['logueado'] = "ok";
    
                            header('location:../profesor/actualizar_perfil.php');
                            break;
                        case 'Administrador':
                                    
                            break;
                        case 'Administrativo':
                            $_SESSION['usuario_id'] = $resultado['id'];
                            $_SESSION['email'] = $resultado['email'];
                            $_SESSION['password'] = $resultado['password'];
                            $_SESSION['rol_id'] = $resultado['rol_id'];
                            $_SESSION['rol'] = $resultado['rol'];
                            $_SESSION['logueado'] = "ok";
    
                            header('location:panel.php');
                            break;
                        
                        default:
                            # code...
                            break;
                    }
    
    
                }else{
                    $mensaje = "Error: Contraseña incorrecta";
                }
            }

           
        }

        
    }
