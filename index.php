<?php require_once 'templates/header.php'; ?>


<section>
    <img class="img-fluid w-100 rounded-bottom" src="./assets/imagenes/colegio.jpg" alt="Instituto">
    <div class="carousel-caption d-none d-md-block align-start">
        <h1 class="display-2 text-center text-dark mb-5 p-3 bg-light rounded"><strong><span class="bg-dark text-light rounded px-4 me-2">ISFTA</span>Instituto Superior de Formación Técnica Angaco</strong></h1>
    </div>
</section>

<div class="mx-4">




    <section class="mt-5 p-5 bg-primary bg-opacity-25 shadow-lg rounded-3 text-white">

        <h2 class="fs-1 mb-3" id="desarrolloSoftware">Tecnicatura Superior en Desarrollo de Software</h2>

        <!-- Carrousel Desarrollo -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="./assets/imagenes/carreras/software/desarrollo_software.jpg" class="d-block w-100" alt="Desarrollo de Software">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2">Conviertete en Desarrollador de Software</h5>
                        <a href="<?= $url; ?>/secciones/publico/desarrollo_software.php" class="btn btn-outline-light p-3 fs-4">Ver plan de estudio</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/imagenes/carreras/software/tipeo.png" class="d-block w-100" alt="Desarrollo de Software">
                </div>
                <div class="carousel-item">
                    <img src="./assets/imagenes/carreras/software/programacion.jpg" class="d-block w-100" alt="Desarrollo de Software">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Acordion Desarrllo de Software -->
        <h3 class="fs-1 my-3">Preguntas frecuentes de la carrera</h3>

        <div class="accordion text-dark fs-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Qué es el Desarrollo de Software?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Qué labores desempeña un Técnico Superior en Desarrollo de Software?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Tiene salida laboral el Desarrollo de Software?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 p-5 bg-success bg-opacity-25 shadow-lg rounded-3 text-white">

        <h2 class="fs-1 mb-3" id="energiasRenovables">Tecnicatura Superior en Gestión de Energías Renovables</h2>

        <!-- Carrousel Energías Renovables -->
        <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="./assets/imagenes/carreras/energias/energia-limpia.jpg" class="d-block w-100" alt=" Gestión de Energías Renovables">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2">Conviertete en Gestor de Energías Renovables</h5>
                        <a href="<?= $url; ?>/secciones/publico/energias_renovables.php" class="btn btn-outline-light p-3 fs-4 shadow-lg">Ver plan de estudio</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/imagenes/carreras/energias/energía_renovables.webp" class="d-block w-100" alt=" Gestión de Energías Renovables">
                </div>
                <div class="carousel-item">
                    <img src="./assets/imagenes/carreras/energias/paneles.jpg" class="d-block w-100" alt=" Gestión de Energías Renovables">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Acordion Energías Renovables -->
        <h3 class="fs-1 my-3">Preguntas frecuentes de la carrera</h3>

        <div class="accordion text-dark fs-4" id="accordionExample2">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                        ¿Qué son las Energías Renovables?
                    </button>
                </h2>
                <div id="collapseOne2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Qué labores desempeña un Técnico Superior en Gestión de Energías Renovables?
                    </button>
                </h2>
                <div id="collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                        ¿Tiene salida laboral la Gestión de Energías Renovables?
                    </button>
                </h2>
                <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 p-5 shadow rounded-3 fs-5" id="contactanos">

        <h2 class="fs-1 mb-3">Contáctanos</h2>

        <form action="#">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Ingesar corréo">
                <label for="floatingInput">Ingresar corréo</label>
            </div>
            <div class="form-floating my-3">
                <textarea class="form-control h-75" placeholder="Ingresar comentario o consulta" id="floatingTextarea" rows="15"></textarea>
                <label for="floatingTextarea">Ingresar comentario o consulta</label>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
            </div>
        </form>
    </section>
</div>

<!-- footer index -->
<section class="mt-5">

    <div class="container-fluid bg-dark text-light text-center fs-4 pt-4 w-100 my-0 py-0 rounded-top">
        <div class="row my-2">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <a href="<?= $url; ?>" class="">
                    <img src="/instituto/assets/imagenes/isft.jfif" alt="Logo ISFTA" class="shadow-lg" style="border-radius:1em;" role="img" aria-label="Bootstrap">
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <h2 class="fs-1 mb-3" id="sobreNosotros">Sobre Nosostros</h2>
            <div class="col-1"></div>
            <div class="col-10 text-justify">
                <h4 class="h4 display-6 fs-5 lh-sm">En un mundo cada vez más complejo y competitivo, se necesitan profesionales capacitados y comprometidos con su vocación. Por eso mismo ofrecemos carreras que son necesarias para el desarrollo de nuestra sociedad ,generen valor económico y social .Con eco en la enseñanza de valores ,y preocupandonos por el desarrollo integral de nuestros estudiantes.</h4>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center justify-content-start">
                        <h4 class="fs-2">Contacto</h4>
                        <a href="" class="link-secondary text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                            </svg>
                            Web
                        </a>
                        <a href="" class="link-secondary text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            2342345
                        </a>
                        <a href="" class="link-secondary text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                            E-mail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-start">
                <h4 class="fs-2">Ubicación</h4>
                <a href="" class="link-secondary text-decoration-none">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        Calle Nacional y Alem <br> Villa del Salvador - Angaco
                    </p>
                </a>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-start">
                <h4 class="fs-2">Redes Sociales</h4>
                <a href="" class="link-danger text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    Instagram
                </a>
                <a href="" class="link-primary text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    Facebook
                </a>
                <a href="" class="link-success text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                    Whatsaap
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5 fs-5 text-white-50">
                Copyright &copy; ISFTANGACO 2023
            </div>
        </div>
    </div>

</section>


<?php require_once 'templates/footer.php'; ?>