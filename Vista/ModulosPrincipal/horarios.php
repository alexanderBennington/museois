<div class="container">

    <h2>HORARIOS</h2>

    <div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">DÍA</th>
                    <th scope="col">HORA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $agenda = new VisitasC();
                    $agenda -> mostrarAgendaSemanalC();
                ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <h3>Agenda Semanal</h3>

    <div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">DÍA</th>
                    <th scope="col">GRUPO</th>
                    <th scope="col">HORA DE ENTRADA</th>
                    <th scope="col">HORA DE SALIDA</th>
                    <th scope="col">ZONAS CERRADAS POR EVENTO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $agenda -> mostrarAgendaSemanalVisitasC();
                ?>
            </tbody>
        </table>
    </div>
</div>


    <h3>¡Guarda tus preocupaciones y tus abrigos! Nuestro Guardarropa te espera.</h3>
    <p>
        En el fascinante viaje a través de las maravillas de Museum, 
        queremos asegurarnos de que tu experiencia sea lo más cómoda y placentera posible. 
        Es por eso que nuestro guardarropa para visitantes está disponible todos los días para cuidar de tus pertenencias.
    </p>
    <h3>Horario del Guardarropa:</h3>
    <ul>
        <li>Abierto todos los días de 10:00 a 17:00</li>
    </ul>
    <p>
        Así es, desde la apertura hasta el cierre, 
        nuestro amable personal estará listo para recibir tus abrigos, 
        bolsos y cualquier otro objeto que desees dejar al resguardo mientras te sumerges en la magia de nuestras exhibiciones.
    </p>
    <h3>¿Por qué deberías aprovechar nuestro Guardarropa?</h3>
    <ol>
        <li>Libertad para Explorar: Sin la carga de llevar abrigos pesados o bolsas, podrás disfrutar plenamente de cada rincón del museo.</li>
        <li>Comodidad Asegurada: Tu comodidad es nuestra prioridad. Disfruta de nuestras exposiciones sin preocuparte por cargar objetos innecesarios.</li>
    </ol>
    <p>
        Recuerda, la visita a Museum no solo es un viaje visual, ¡sino una experiencia de confort y deleite en todos los sentidos!
        <br>
        ¡Esperamos que disfrutes tu visita!
    </p>
</div>