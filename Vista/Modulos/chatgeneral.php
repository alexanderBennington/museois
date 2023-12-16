<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<div class="fondosesion">
<div class="container">
    <h2 align=center>CHAT GENERAL</h2>
    <div>
        <div class="cuadrochat">
            <?php
                $mostrarchat = new ChatC();
                $mostrarchat -> MostrarChatGeneralC();
            ?>
        </div>
        <form method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mensaje" aria-label="Mensaje" aria-describedby="button-addon2" name=mensaje required>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">ENVIAR</button>
            </div>
        </form>
        <?php
            $mostrarchat -> EnviarMensajeChatGeneralC();
        ?>
    </div>

</div>
</div>