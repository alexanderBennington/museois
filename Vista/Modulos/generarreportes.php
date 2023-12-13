<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>REPORTE</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">DETALLES DE REPORTE</h2>
            <form method="post">
                <?php
                    $solicitud = new SolicitudC();
                    $solicitud -> MostrarDetallesReporteC();
                ?>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">DETALLES</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=detalles required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">GENERAR REPORTE</button>
            </form>
            <?php
                    $reporte = new ReporteC();
                    $reporte -> CrearReporteC();
            ?>
        </div>
    </div>
</div>
</div>