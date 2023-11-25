<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR EMPLEADOS</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=idempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=nombreempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=appempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=apmempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fechaempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RFC</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=rfcempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CURP</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=curpempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NSS</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=nssempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ESCOLARIDAD</label>
                    <select class="form-select" aria-label="Default select example" name=escolaridadempA required>
                        <option value="SECUNDARIA">SECUNDARIA</option>
                        <option value="BACHILLERATO">BACHILLERATO</option>
                        <option value="INGENIERIA">INGENIERIA</option>
                        <option value="LICENCIATURA">LICENCIATURA</option>
                        <option value="DOCTORADO">DOCTORADO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zonaempA required>
                        <option value="1">SECUNDARIA</option>
                        <option value="2">BACHILLERATO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">TIPO DE EMPLEADO</label>
                    <select class="form-select" aria-label="Default select example" name=tipoempA required>
                        <option value="INTENDENCIA">INTENDENCIA</option>
                        <option value="MONITOR">MONITOR</option>
                        <option value="GUIA">GUIA</option>
                        <option value="INVESTIGADOR">INVESTIGADOR</option>
                        <option value="CATALOGADOR">CATALOGADOR</option>
                        <option value="CONS_REST">CONSERVADOR, RESTAURADOR</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">CV</label>
                    <input class="form-control" type="file" id="formFile" name=cvempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=usuarioempA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CLAVE</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=claveempA required>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregarempleado = new EmpleadosC();
                $agregarempleado -> NuevoEmpleadoC();
            ?>
        </div>
        <div class="col">
        <h2 align="center">EDITAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="e1" aria-describedby="emailHelp" name=idempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="e2" aria-describedby="emailHelp" name=nombreempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="e3" aria-describedby="emailHelp" name=appempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="e4" aria-describedby="emailHelp" name=apmempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
                    <input type="date" class="form-control" aria-describedby="emailHelp" name=fechaempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RFC</label>
                    <input class="form-control" id="e5" aria-describedby="emailHelp" name=rfcempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CURP</label>
                    <input class="form-control" id="e6" aria-describedby="emailHelp" name=curpempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NSS</label>
                    <input class="form-control" id="e7" aria-describedby="emailHelp" name=nssempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ESCOLARIDAD</label>
                    <select class="form-select" aria-label="Default select example" name=escolaridadempE required>
                        <option value="SECUNDARIA">SECUNDARIA</option>
                        <option value="BACHILLERATO">BACHILLERATO</option>
                        <option value="INGENIERIA">INGENIERIA</option>
                        <option value="LICENCIATURA">LICENCIATURA</option>
                        <option value="DOCTORADO">DOCTORADO</option>
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zonaempE required>
                        <option value="1">SECUNDARIA</option>
                        <option value="2">BACHILLERATO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">TIPO DE EMPLEADO</label>
                    <select class="form-select" aria-label="Default select example" name=tipoempE required>
                        <option value="INTENDENCIA">INTENDENCIA</option>
                        <option value="MONITOR">MONITOR</option>
                        <option value="GUIA">GUIA</option>
                        <option value="INVESTIGADOR">INVESTIGADOR</option>
                        <option value="CATALOGADOR">CATALOGADOR</option>
                        <option value="CONS_REST">CONSERVADOR, RESTAURADOR</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">CV</label>
                    <input class="form-control" type="file" id="formFile" name=cvempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                    <input class="form-control" id="e8" aria-describedby="emailHelp" name=usuarioempE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CLAVE</label>
                    <input type="password" class="form-control" id="e9" aria-describedby="emailHelp" name=claveempE required>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $editarempleado = new EmpleadosC();
                $editarempleado -> EditarEmpleadoC();
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
                    <input class="form-control" id="e10" aria-describedby="emailHelp" name=idempEL readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE(S)</label>
                    <input class="form-control" id="e11" aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO PATERNO</label>
                    <input class="form-control" id="e12" aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">APELLIDO MATERNO</label>
                    <input class="form-control" id="e13" aria-describedby="emailHelp" readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $eliminarempleado = new EmpleadosC();
                $eliminarempleado -> EliminarEmpleadoC();
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
                    <th scope="col">Fecha</th>
                    <th scope="col">RFC</th>
                    <th scope="col">CURP</th>
                    <th scope="col">NSS</th>
                    <th scope="col">ESCOLARIDAD</th>
                    <th scope="col">ZONA</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">CV</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CLAVE</th>
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
<script src="Vista/js/empleados.js"></script>

</div>