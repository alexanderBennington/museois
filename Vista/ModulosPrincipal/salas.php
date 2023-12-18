<div class="container">
    <h2 align=center>SALAS</h2>
    <table class="table table-borderless table-dark">
        <thead>
            <tr>
                <th scope="col">SALA</th>
                <th scope="col">ESTADO</th>
                <th scope="col">ENCARGADO</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $salas = new ZonasC();
                $salas -> MostrarZonasPublicoC();
            ?>
        </tbody>
    </table>
</div>