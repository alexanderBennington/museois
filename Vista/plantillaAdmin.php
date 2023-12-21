<?php
	session_start();
	if(!$_SESSION["ingreso"]){
		header("location:index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administración</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Vista/css/sesiones.css">
    <link  href="Vista/img/logoof.ico" rel="shortcut icon">
    <script src="Vista/js/jquery.min.js"></script>
</head>
<body>
    <?php
        include "Modulos/menu.php";
    ?>
    <section>
        <?php
            $rutas = new RutasControlador();
            $rutas -> Rutas();
        ?>
    </section>
    <footer>
        <section id="pie" class="cent-v">
            <div class="container disflex">
                <div>
                    <img src="Vista/img/name.png" alt="name" width="100">
                </div>
                <div class="pie-der">
                    <p>
                        © 2023 Museum. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>