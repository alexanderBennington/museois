<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>SOLICITUD</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">COLECCIÓN</label>
                    <select class="form-select" aria-label="Default select example" name=coleccionA required>
                        <?php
                            $mostrarcolecciones = new ColeccionC();
                            $mostrarcolecciones -> MostrarColeccionesSelectC();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">DETALLES</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=detallesA required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ENCARGADO</label>
                    <select class="form-select" aria-label="Default select example" name=encargadoA required>
                        <?php
                            $mostrarencargado = new EmpleadosC();
                            $mostrarencargado -> MostrarEncargadosColeccionC();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregarsolicitud = new SolicitudC();
                $agregarsolicitud -> NuevoSolicitudC();
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
                    <th scope="col">No. DE SOLICITUD</th>
                    <th scope="col">ARTICULO</th>
                    <th scope="col">ENCARGADO</th>
                    <th scope="col">FECHA DE REGISTRO</th>
                    <th scope="col">DETALLES</th>
                    <th scope="col">ESTADO DE SOLICITUD</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarsolicitudes = new SolicitudC();
                    // Verificar si se ha enviado el formulario para aprobar
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['aprobar'])) {
                            $mostrarsolicitudes->AprobarSolicitudC();
                        } elseif (isset($_POST['noaprobar'])) {
                            $mostrarsolicitudes->NOAprobarSolicitudC();
                        }
                    }
                    $mostrarsolicitudes -> MostrarSolicitudC();
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>