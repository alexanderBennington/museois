<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR EQUIPO</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" aria-describedby="emailHelp" name=nombreA required>
                </div>
                <div class="mb-3">
                    <label class="form-label">TIPO DE DISPOSITIVO</label>
                    <select class="form-select" aria-label="Default select example" name=dispositivoA required>
                        <option value="PC">PC</option>
                        <option value="CAMARA">CAMARA</option>
                        <option value="SERVIDOR">SERVIDOR</option>
                        <option value="IMPRESORA">IMPRESORA</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">DIRECCIÓN IP</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=ipA required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zonaA required>
                        <?php
                            $mostrarareas = new ZonasC();
                            $mostrarareas -> MostrarZonasOpciones2C();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $equipo = new EquiposC();
                $equipo -> agregarEquipoC();
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
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" id="a2" aria-describedby="emailHelp" name=nombreE required>
                </div>
                <div class="mb-3">
                    <label class="form-label">TIPO DE DISPOSITIVO</label>
                    <select class="form-select" aria-label="Default select example" name=dispositivoE required>
                        <option value="PC">PC</option>
                        <option value="CAMARA">CAMARA</option>
                        <option value="SERVIDOR">SERVIDOR</option>
                        <option value="IMPRESORA">IMPRESORA</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">DIRECCIÓN IP</label>
                    <input class="form-control" id="a3" aria-describedby="emailHelp" name=ipE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zonaE required>
                        <?php
                            $mostrarareas -> MostrarZonasOpciones2C();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $equipo -> editarEquipoC();
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
                    <input class="form-control" id="a4" aria-describedby="emailHelp" name=idEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" id="a5" aria-describedby="emailHelp" required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE DISPOSITIVO</label>
                    <input class="form-control" id="a6" aria-describedby="emailHelp" required readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $equipo -> eliminarEquipoC();
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
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DISPSITIVO</th>
                    <th scope="col">IP</th>
                    <th scope="col">ZONA</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $equipo -> mostrarEquiposC();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="Vista/js/equipos.js"></script>

</div>