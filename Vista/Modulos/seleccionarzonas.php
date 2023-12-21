<div class="fondosesion">
<div class="container">
    <h2 align=center>SELECCIÓN DE ZONAS</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">DETALLES DE REPORTE</h2>
            <form method="post">
                <?php
                    $visita = new VisitasC();
                    $zonas = new ZonasC();
                    $visita -> MostrarDetallesVisitaC();
                ?>
                <div class="mb-3">
                    <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo '<label class="form-label">ZONA ' . $i . '</label>';
                            echo '<select class="form-select" aria-label="Default select example" name="zona[' . $i . ']" required>';
                            echo '<option value="">Selecciona una opción</option>';
                            $zonas->MostrarZonasVisitasC();
                            echo '</select>';
                        }
                    ?>
                </div>
                <button type="submit" class="btn btn-danger" name="registrar">REGISTRAR</button>
            </form>
            <?php
                    $visita -> registrarzonasVisitaC();
            ?>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ZONAS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $visita -> mostrarVisitaZonasC();
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>

