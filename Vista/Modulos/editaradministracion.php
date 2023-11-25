<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR ADMINISTRADORES</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=nombreA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=appA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=apmA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RFC</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=rfcA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CURP</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=curpA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NSS</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=nssA required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Área</label>
                    <select class="form-select" aria-label="Default select example" name=areaA required>
                        <option value="DIRECCION">DIRECCIÓN</option>
                        <option value="CONS_REST">CONSERVADORES Y RESTAURADORES</option>
                        <option value="CIS">CATALOGADORES, INVESTIGADORES Y ORIENTACIÓN</option>
                        <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                        <option value="OPERATIVO_TAQ">OPERATIVO Y TAQUILLAS</option>
                        <option value="PORTAL_INF">PORTAL E INFORMÁTICA</option>
                        <option value="SEGURIDAD">SEGURIDAD</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=usuarioA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CLAVE</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=claveA required>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregaradministrador = new AdministradoresC();
                $agregaradministrador -> NuevoAdministradorC();
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
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="a2" aria-describedby="emailHelp" name=nombreE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="a3" aria-describedby="emailHelp" name=appE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="a4" aria-describedby="emailHelp" name=apmE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RFC</label>
                    <input class="form-control" id="a5" aria-describedby="emailHelp" name=rfcE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CURP</label>
                    <input class="form-control" id="a6" aria-describedby="emailHelp" name=curpE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NSS</label>
                    <input class="form-control" id="a7" aria-describedby="emailHelp" name=nssE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Área</label>
                    <select class="form-select" aria-label="Default select example" name=areaE required>
                        <option value="DIRECCION">DIRECCIÓN</option>
                        <option value="CONS_REST">CONSERVADORES Y RESTAURADORES</option>
                        <option value="CIS">CATALOGADORES, INVESTIGADORES Y ORIENTACIÓN</option>
                        <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                        <option value="OPERATIVO_TAQ">OPERATIVO Y TAQUILLAS</option>
                        <option value="PORTAL_INF">PORTAL E INFORMÁTICA</option>
                        <option value="SEGURIDAD">SEGURIDAD</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                    <input class="form-control" id="a8" aria-describedby="emailHelp" name=usuarioE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CLAVE</label>
                    <input type="password" class="form-control" id="a9" aria-describedby="emailHelp" name=claveE required>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $editaradministrador = new AdministradoresC();
                $editaradministrador -> EditarAdministradorC();
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
                    <input class="form-control" id="a10" aria-describedby="emailHelp" name=idEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="a11" aria-describedby="emailHelp" required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="a12" aria-describedby="emailHelp" required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="a13" aria-describedby="emailHelp" required readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $eliminaradministrador = new AdministradoresC();
                $eliminaradministrador -> EliminarAdministradorC();
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
                    <th scope="col">NOMBRE(S)</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">RFC</th>
                    <th scope="col">CURP</th>
                    <th scope="col">NSS</th>
                    <th scope="col">Área</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CLAVE</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostraradministrador = new AdministradoresC();
                    $mostraradministrador -> MostrarAdministradoresC();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="Vista/js/administradores.js"></script>

</div>