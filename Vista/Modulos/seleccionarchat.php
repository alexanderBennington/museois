<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>CHAT EMPLEADOS</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">EMPLEADO</th>
                    <th scope="col">TIPO</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarempleados = new EmpleadosC();
                    $chat = new ChatC();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['seleccionarid'])) {
                            $chat->RedirigirChatC();
                        }
                    }
                    $mostrarempleados -> MostrarEmpleadosChatC();
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>