<div class="container">
    <h2 align=center>SALAS</h2>
    <table class="table table-borderless table-dark">
        <thead>
            <tr>
                <th scope="col">GRUPO</th>
                <th scope="col">FECHA</th>
                <th scope="col">HORA DE ENTRADA</th>
                <th scope="col">HORA DE SALIDA</th>
                <th scope="col">GUIA</th>
                <th scope="col">MONITOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $grupos = new VisitasC();
                $grupos -> MostrarVisitasPublicoC();
            ?>
        </tbody>
    </table>
</div>