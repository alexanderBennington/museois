<div class="container">

    <h2>HORARIOS</h2>

    <h1>Agenda Semanal</h1>
    <table>
        <tr>
            <th>Día</th>
            <th>Eventos</th>
        </tr>
        <?php
        // Obtén la fecha de inicio y fin de la semana actual
        $today = new DateTime();
        $start_of_week = $today->modify('this week')->format('Y-m-d');
        $end_of_week = $today->modify('this week +6 days')->format('Y-m-d');

        // Itera sobre los días de la semana
        $current_date = new DateTime($start_of_week);
        while ($current_date <= new DateTime($end_of_week)) {
            $formatted_date = $current_date->format('d-m-Y');
            echo "<tr>";
            echo "<td>$formatted_date</td>";
            echo "<td>";
            // Muestra los eventos para el día actual
            if (isset($eventos[$formatted_date])) {
                echo implode(', ', $eventos[$formatted_date]);
            } else {
                echo "Sin eventos";
            }
            echo "</td>";
            echo "</tr>";
            $current_date->modify('+1 day');
        }
        ?>
    </table>

    <div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE(S)</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">RFC</th>
                    <th scope="col">CURP</th>
                    <th scope="col">NSS</th>
                    <th scope="col">ESCOLARIDAD</th>
                    <th scope="col">ZONA</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">CV</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CLAVE</th>
                    <th scope="col">CREDENCIAL</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarempleados = new EmpleadosC();
                    $mostrarempleados -> MostrarEmpleadosC();
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