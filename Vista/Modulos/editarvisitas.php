<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR VISITAS</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">GRUPO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=grupoA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE VISITA</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fechaA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA DE ENTRADA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=horaeA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA DE SALIDA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=horasA required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">GUIA</label>
                    <select class="form-select" aria-label="Default select example" name=guiaA required>
                        <?php
                            $mostrarguia = new EmpleadosC();
                            $mostrarguia -> MostrarGuiasC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">MONITOR</label>
                    <select class="form-select" aria-label="Default select example" name=monitorA required>
                        <?php
                            $mostrarmonitor = new EmpleadosC();
                            $mostrarmonitor -> MostrarMonitoresC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ESTADO</label>
                    <select class="form-select" aria-label="Default select example" name=estadoA required>
                        <option value="PENDIENTE">PENDIENTE</option>
                        <option value="CONCLUIDO">CONCLUIDO</option>
                        <option value="CANCELADO">CANCELADO</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregarvisita = new VisitasC();
                $agregarvisita -> NuevoVisitaC();
            ?>
        </div>
        <div class="col">
            <h2 align="center">EDITAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="a1" aria-describedby="emailHelp" name=idE required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">GRUPO</label>
                    <input class="form-control" id="a2" aria-describedby="emailHelp" name=grupoE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE VISITA</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fechaE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA DE ENTRADA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="a3" aria-describedby="emailHelp" name=horaeE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA DE SALIDA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="a4" aria-describedby="emailHelp" name=horasE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">GUIA</label>
                    <select class="form-select" aria-label="Default select example" name=guiaE required>
                        <?php
                            $mostrarguia = new EmpleadosC();
                            $mostrarguia -> MostrarGuiasC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">MONITOR</label>
                    <select class="form-select" aria-label="Default select example" name=monitorE required>
                        <?php
                            $mostrarmonitor = new EmpleadosC();
                            $mostrarmonitor -> MostrarMonitoresC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ESTADO</label>
                    <select class="form-select" aria-label="Default select example" name=estadoE required>
                        <option value="PENDIENTE">PENDIENTE</option>
                        <option value="CONCLUIDO">CONCLUIDO</option>
                        <option value="CANCELADO">CANCELADO</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $editarvisita = new VisitasC();
                $editarvisita -> EditarVisitaC();
            ?>
        </div>
    </div>
</div>

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col">
        <h2 align="center">ELIMINAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="a5" aria-describedby="emailHelp" name=idEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">GRUPO</label>
                    <input class="form-control" id="a6" aria-describedby="emailHelp" name=grupoEL required readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $eliminarvisita = new VisitasC();
                $eliminarvisita -> EliminarVisitaC();
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">GRUPO</th>
                    <th scope="col">FECHA REGISTRO</th>
                    <th scope="col">VISITA PROGRAMADA</th>
                    <th scope="col">HORA ENTRADA</th>
                    <th scope="col">HORA SALIDA</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">GUIA</th>
                    <th scope="col">MONITOR</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarvisita = new VisitasC();
                    $zonas = new ZonasC();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['seleccionarzonas'])) {
                            $zonas->iraseleleccionarZonasC();
                        }
                    }
                    $mostrarvisita -> MostrarVisitasC();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="Vista/js/visitas.js"></script>

</div>