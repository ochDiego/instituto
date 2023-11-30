<?php
require_once '../../config/database.php';
$pdo = Database::conectar();
if ($_POST) {
    $fechai = $_POST['fechaInicio'];
    $alumno = $_POST['alumno'];
    $idusa = $_POST['id_mesa'];
    include 'conexion.php';
    mysqli_set_charset($conn, "utf8");
    $query = "INSERT INTO inscripcion_mesa(mesa_examen_id,alumno_id, fecha) VALUES ('$idusa','$alumno', '$fechai')";
    $result = $conn->query($query);
    if ($result) {
        //echo "<script>alert('Inscripción realizada con exito!')</script>";
?>

        <!-- Alerta inscripcion realizada correctamente -->

        
        
        <div class="mt-2 mb-0">
            <div class="d-grid">
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                        <symbol id="check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                    </svg>
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" height="1.5em" width="1.5em">
                        <use xlink:href="#success" />
                    </svg>
                    <strong>Inscripción realizada exitosamente</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <a href='mostrar_inscripciones.php' class="btn btn-success my-3 "> Mostrar inscripcion</a>
            </div>
        </div>
<?php
    } else {
        //echo "<script>alert('inscripción no realizada!')</script>";
?>

        <!-- Alerta inscripcion no realizada -->

        
        
        <div class="mt-2 mb-0">
            <div class="d-grid">
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
                    <strong>No se realizó la inscripción</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <a href='mostrar_inscripciones.php' class="btn btn-success my-3 "> Mostrar inscripcion</a>
            </div>
        </div>
<?php
        die(mysqli_error($conn));
    }
}
?>