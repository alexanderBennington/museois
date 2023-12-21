<div class="fondosesion">
<div class="container">
    <h2 align=center>ACTIVIDADES</h2>
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
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $actividades = new ActividadesC();
                $actividades -> agregarActividadC();
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
                    <th scope="col">FECHA DE ACTIVIDAD</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['actividad'])) {
                            $actividades -> mostrarHojaActividadC();
                        }
                    }
                    $actividades -> mostrarActividadesC();
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>