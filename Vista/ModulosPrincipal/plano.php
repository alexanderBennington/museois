<div class="container">
    <h2>MAPA</h2>
    <div class="display-flex-center">
        <div>
            <img src="Vista/img/mapa.jpg" alt="mapa 1" width="90%" >
        </div>
        <div>
            <img src="Vista/img/mapa2.jpg" alt="mapa 2" width="90%">
        </div>
    </div>
</div>

<div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarzona = new ZonasC();
                    $mostrarzona -> MostrarZonasMapaC();
                ?>
            </tbody>
        </table>
    </div>
</div>