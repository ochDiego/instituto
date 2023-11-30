<?php 
require_once '../../../config/database.php';
    

    $pdo = Database::conectar();

    
    if($_POST){
        $fechai = $_POST['fechaInicio'];
        $fechaf = $_POST['fechafin'];
        $materia = $_POST['materia'];
        $profesor = $_POST['profe'];
        $ciclol = $_POST['ciclo'];
        $carrera = $_POST['carrera'];
        
    


            //verifica que coincidan las contraseñas, en caso afirmativo se registra el usuario en la base de datos
            include 'conexion.php';
            mysqli_set_charset($conn, "utf8");
            $query =     "INSERT INTO mesa_examen(fecha_inicio, fecha_fin, materia_id, profesor_id, ciclo_lectivo_id, carrera_id) 
				VALUES ('$fechai','$fechaf','$materia', '$profesor','$ciclol','$carrera')";

         $result = $conn->query($query);
            if ($result) {
                echo "si se inserto";
        ?>
                <a href='mesas.php' class="btn btn-dark"> Volver atras</a>
        <?php
            } else {
                echo "no se inserto";
                die(mysqli_error($conn));
            }
                
            
        }
    ?>