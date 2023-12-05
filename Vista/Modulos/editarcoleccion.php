<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR COLECCIÓN</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=idA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=nombreA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fechaA required>
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
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">INVESTIGADOR/ENCARGADO</label>
                    <select class="form-select" aria-label="Default select example" name=invA required>
                        <?php
                            $mostrarempleados = new EmpleadosC();
                            $mostrarempleados -> MostrarInvestigadoresC();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregarcoleccion = new ColeccionC();
                $agregarcoleccion -> NuevoColeccionC();
            ?>
        </div>
        <div class="col">
        <h2 align="center">EDITAR</h2>
        <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="a1" aria-describedby="emailHelp" name=idE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" id="a2" aria-describedby="emailHelp" name=nombreE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE INGRESO</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fechaE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zonaE required>
                        <?php
                            $mostrarareas = new ZonasC();
                            $mostrarareas -> MostrarZonasOpciones2C();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">INVESTIGADOR/ENCARGADO</label>
                    <select class="form-select" aria-label="Default select example" name=invE required>
                        <?php
                            $mostrarempleados = new EmpleadosC();
                            $mostrarempleados -> MostrarInvestigadoresC();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $editarcoleccion = new ColeccionC();
                $editarcoleccion -> EditarColeccionC();
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
                    <input class="form-control" id="a3" aria-describedby="emailHelp" name=idEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                    <input class="form-control" id="a4" aria-describedby="emailHelp" required readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $eliminarColeccion = new ColeccionC();
                $eliminarColeccion -> EliminarColeccionC();
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
                    <th scope="col">FECHA</th>
                    <th scope="col">ZONA</th>
                    <th scope="col">ENCARGADO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarColeccion = new ColeccionC();
                    $mostrarColeccion -> MostrarColeccionC();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="Vista/js/zonas.js"></script>

</div>