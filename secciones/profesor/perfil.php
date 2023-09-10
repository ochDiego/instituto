<?php require_once '../../templates/header.php'; ?>

    <?php require_once 'procesar_perfil.php'; ?>

    <div class="container py-3">
        <h1>Mi perfil (<small> <?= $_SESSION['rol']; ?> </small>)</h1>

        <p>Nombre:  <?= (isset($profesor['nombre']))?$profesor['nombre'] : ''; ?></p>
        <p>Apellido:  <?= (isset($profesor['apellido']))?$profesor['apellido'] : ''; ?></p>
        <p>DNI:  <?= (isset($profesor['dni']))?$profesor['dni'] : ''; ?></p>
        <p>Teléfono:  <?= (isset($profesor['telefono']))?$profesor['telefono'] : ''; ?></p>
    </div>

<?php require_once '../../templates/footer.php'; ?>