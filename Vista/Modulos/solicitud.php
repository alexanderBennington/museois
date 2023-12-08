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
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ESTADO</label>
                    <select class="form-select" aria-label="Default select example" name=estadoA required>
                        <option value="PENDIENTE">PENDIENTE</option>
                        <option value="APROBADO">APROBADO</option>
                        <option value="NO APROBADO">NO APROBADO</option>
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
</div>