<?php require_once '../../templates/header.php'; ?>

    <?php require_once 'procesar_perfil.php'; ?>

    <div class="container py-3">
        <h1>Mi perfil (<small> <?= $_SESSION['rol']; ?> </small>)</h1>
        

        <p>Nombre:  <?= (isset($alumno['nombre']))?$alumno['nombre'] : ''; ?></p>
        <p>Apellido:  <?= (isset($alumno['apellido']))?$alumno['apellido'] : ''; ?></p>
        <p>DNI:  <?= (isset($alumno['dni']))?$alumno['dni'] : ''; ?></p>
        <p>Teléfono:  <?= (isset($alumno['telefono']))?$alumno['telefono'] : ''; ?></p>
    </div>

<?php require_once '../../templates/footer.php'; ?>