<?php require_once './templates/header.php'; ?>

    <?php 
        require_once '../../config/database.php';

        $pdo = Database::conectar();
        $sentencia =  $pdo->query("SELECT e.id AS id,e.fecha_inicio AS fi, e.fecha_fin AS ff, m.nombre AS materia, p.nombre AS profesor, mc.periodo AS ciclo_lectivo, c.nombre AS carrera FROM mesa_examen e 
         JOIN materias m ON m.id = e.materia_id 
         JOIN profesores p ON p.id = e.profesor_id 
         JOIN materia_carrera mc ON mc.id = e.materia_id 
         JOIN carreras c ON c.id = e.carrera_id 
         
        WHERE e.estado = 1 ");
        $mesas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>

        <h2 class="h1 mt-4 text-center">Mesas Habilitadas</h2>

        <a class="btn btn-outline-dark rounded-pill mt-3 ms-4 px-3" href="<?= $url; ?>/secciones/alumno/mostrar_inscripciones.php" >
            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="gray" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M481 31C445.1-4.8 386.9-4.8 351 31l-15 15L322.9 33C294.8 4.9 249.2 4.9 221.1 33L135 119c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L255 66.9c9.4-9.4 24.6-9.4 33.9 0L302.1 80 186.3 195.7 316.3 325.7 481 161c35.9-35.9 35.9-94.1 0-129.9zM293.7 348.3L163.7 218.3 99.5 282.5c-48 48-80.8 109.2-94.1 175.8l-5 25c-1.6 7.9 .9 16 6.6 21.7s13.8 8.1 21.7 6.6l25-5c66.6-13.3 127.8-46.1 175.8-94.1l64.2-64.2z" />
            </svg>
            Ver inscripciones a mesas
        </a>
   
        <div class="card-body my-3 mx-4 shadow-lg border-0 p-3">
            <table class="table table-stripped table-hover text-center justify-content-center align-items-center overflow-y-auto my-4 pt-2">
                <thead>
                    <tr>
                        <th class="text-center">Fecha inicio</th>
                        <th class="text-center">Fecha fin</th>
                        <th class="text-center">Materia</th>
                        <th class="text-center">Profesor</th>
                        <th class="text-center">Ciclo lectivo</th>
                        <th class="text-center">Carrera</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($mesas as $mesa):?>
                   <tr>
                        <td class="text-center"><?= $mesa['fi']; ?></td>
                        <td class="text-center"><?= $mesa['ff']; ?></td>
                        <td class="text-center"><?= $mesa['materia']; ?></td>
                        <td class="text-center"><?= $mesa['profesor']; ?></td>
                        <td class="text-center"><?= $mesa['ciclo_lectivo']; ?></td> 
                        <td class="text-center"><?= $mesa['carrera']; ?></td> 
                        <td class="text-center">
                        <a name="" id="" class="btn btn-primary rounded-pill px-3  btn-sm text-center" href="<?= $url; ?>/secciones/alumno/inscripcion.php?iduser=<?php echo $mesa['id']?>" role="button"><b>Inscrbirme</b></a>
                       
                       

                        </td>            
                   </tr>
                   <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require_once './templates/footer.php'; ?>

<script src="<?= $url; ?>/assets/js/dataTables.js"></script>