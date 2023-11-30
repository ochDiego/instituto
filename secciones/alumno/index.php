<?php 
    require_once './templates/header.php'; 
?>

<div class="container">
    <h2 class="mt-4 text-center fs-1">Carrera</h2>
    
        <div class="card mx-4 shadow-lg border-0 px-4">
            <div class="card-body my-4">
                <div class="row d-flex justify-content-evenly align-items-center">
                    
                    <div class="col-6">
                        <div class="card bg-dark text-white shadow-lg border-0">
                            <img src="./../../assets/imagenes/carreras/software/desarrollo_software.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h3 class="card-title">Tecnicatura Superior en Desarrollo de Software</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="<?= $url; ?>/secciones/alumno/carreras/desarrollo_software.php" class="btn btn-outline-light">Plan de estudio</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card bg-dark text-white shadow-lg border-0">
                            <img src="./../../assets/imagenes/carreras/energias/energias-renovables.webp" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h3 class="card-title">Tecnicatura Superior en Gestión de Energías Renovables</h3>
                                <p class="card-text">Se denomina energía renovable a la energía que se obtiene a partir de fuentes naturales virtualmente inagotables.</p>
                                <a href="<?= $url; ?>/secciones/alumno/carreras/energias_renovables.php" class="btn btn-outline-light">Plan de estudio</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</div>
<?php 
    require_once './templates/footer.php'; 
?>