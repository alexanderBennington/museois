<?php
    require_once "Controlador/LoginC.php";
    require_once "Modelo/LoginM.php";
	session_start();
	if(isset($_SESSION["ingreso"])){
		header("location:indicaciones.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión Administración</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Vista/css/sesiones.css">
    <link  href="Vista/img/logoof.ico" rel="shortcut icon">


</head>
<body>
    <header class="cent-v-h">
        <div>
            <img src="Vista/img/logoof.svg" alt="logo" width="150">
        </div>
    </header>


    <div class="mx-auto cajasesion">
        <form method="post">
            <div align="center">
                <p class="plog">Sistema Museum <br> <strong>Administración</strong></p>
                <img src="Vista/img/logoof.svg" width="250" alt="logo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuarioadmin">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Clave</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="claveadmin">
            </div>
            <button type="submit" class="llog btn btn-dark">Ingresar</button>
        </form>
    </div>

    <?php
        $ingreso = new LoginC();
        $ingreso -> VerificarC();
    ?>

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