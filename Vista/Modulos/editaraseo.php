<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>ASEO</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">ZONAS DE ASEO</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ZONA</label>
                    <select class="form-select" aria-label="Default select example" name=zona required>
                        <?php
                            $mostrarareas = new ZonasC();
                            $mostrarareas -> MostrarZonasOpciones2C();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=fecha required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HORA</label>
                    <input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" title="Formato de 24 horas HH:mm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=hora required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">ENCARGADO</label>
                    <select class="form-select" aria-label="Default select example" name=encargado required>
                        <?php
                            $mostrarencargado = new EmpleadosC();
                            $mostrarencargado -> mostrarEmpleadosAseoC();
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $aseo = new AseoC();
                $aseo -> agregarAseoC();
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
                    <th scope="col">ZONA</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">ENCARGADO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $aseo -> mostrarAseoC();
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>