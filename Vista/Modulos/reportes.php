<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>SOLICITUDES</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No. DE SOLICITUD</th>
                    <th scope="col">ARTICULO</th>
                    <th scope="col">ENCARGADO</th>
                    <th scope="col">FECHA DE REGISTRO</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">DETALLES</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarsolicitudes = new SolicitudC();
                    $reportes = new ReporteC();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['generar'])) {
                            $reportes->GenerarReporteC();
                        } elseif (isset($_POST['eliminar'])) {
                            $reportes->EliminarReporteC();
                        }
                    }
                    $mostrarsolicitudes -> MostrarSolicitudAprobadaC();
                ?>
            </tbody>
        </table>
    </div>

    <h2 align=center>REPORTES</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No. DE REPORTE</th>
                    <th scope="col">ARTICULO</th>
                    <th scope="col">ENCARGADO</th>
                    <th scope="col">FECHA DE ENTREGA</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $reportes -> MostrarReporteC();
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>