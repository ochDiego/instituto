

<?php require_once '../../templates/header.php'; ?>

<?php

include 'conexion.php';
       
        $id = $_GET['id'];
        ?>
        
        <h2 class="h1 text-center mt-3">¿Desea eliminar la mesa seleccionada?</h2>

        <a href='<?= $url; ?>/secciones/alumno/mostrar_inscripciones.php' class="btn btn-outline-dark  rounded-pill ms-3 px-3 mt-3">
            <div class="d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
                </svg>
                Volver
            </div>
        </a>

        <form class="container d-flex justify-content-center align-items-center" method="POST" action="#">
            <div class="shadow rounded py-3 px-5 mt-5">
            <?php
                    if ($_POST) {
                        $elim = $_POST['eliminar'];

                        mysqli_set_charset($conn, "utf8");
                        $query =     "UPDATE  inscripcion_mesa SET estado='$elim' WHERE id='$id'";
                        $result = $conn->query($query);
                        if ($result) {
                        ?>
                                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                                        <symbol id="check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </symbol>
                                    </svg>
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" height="1.5em" width="1.5em">
                                        <use xlink:href="#success" />
                                    </svg>
                                    <strong>Operación realizada exitosamente</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                        }else{
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center justify-content-center mt-2 mx-3 text-center" role="alert">
                                    <strong>La operación no realizada</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                        } 
                        }  
                ?>
                <span class="h4 d-block w-100 mb-3 text-center">Seleccione:</span>
                <div class="form-check form-check-inline d-flex justify-content-center align-items-center">
                    <input class="form-check-input" type="radio" name="eliminar" value="0">
                    <label class="form-check-label text-center ms-1">Si</label>
                </div><br>
                <div class="mt-3  d-flex justify-content-center align-items-center  w-100"> 
                    <a href="<?= $url; ?>/secciones/alumno/mostrar_inscripciones.php" class="btn btn-dark me-2 rounded-pill px-4">Cancelar</a>

                    <input type="submit" class="btn btn-danger rounded-pill px-4" value="Enviar">
                </div>
            </div>


        </form>

<?php require_once '../../templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>