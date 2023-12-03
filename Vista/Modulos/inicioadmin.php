<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>

<section id="img-prin">
    <div id="img-prin-tex">
        <h1><strong>Administración</strong></h1>
        <h2>Sistema de Gestión Museum</h2>
    </div>
</section>