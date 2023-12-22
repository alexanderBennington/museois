<div class="fondosesion">
<div class="container">
    <h2 align=center>INCIDENTES</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">EMPLEADO</label>
                    <select class="form-select" aria-label="Default select example" name=empleado required>
                        <?php
                            $empleados = new EmpleadosC();
                            $empleados -> mostrarselectEmpleadosC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">DETALLES</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=detalles required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA</label>
                    <input type="date" class="form-control" aria-describedby="emailHelp" name=fecha required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=hora required>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $incidentes = new IncidentesC();
                $incidentes -> agregarIncidenteC();
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
                    <th scope="col">No.</th>
                    <th scope="col">EMPLEADO</th>
                    <th scope="col">DETALLES</th>
                    <th scope="col">FECHA DE INCIDENTE</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['incidente'])) {
                            $incidentes -> mostrarHojaIncidenteC();
                        }
                    }
                    $incidentes -> mostrarIncidentesC();
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>