<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FillGaps - Museo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <link rel="stylesheet" href="Vista/css/owl.carousel.min.css">
    <link  href="Vista/img/logoof.ico" rel="shortcut icon">

    <!-- javascript -->
    <script src="Vista/js/jquery.min.js"></script>
    <script src="Vista/js/owl.carousel.min.js"></script>
</head>
<body>
    <header class="cent-v-h">
        <div>
            <img src="Vista/img/logoof.svg" alt="logo" width="150">
        </div>
    </header>

    <?php
        include "ModulosPrincipal/menu.php";
    ?>

    <?php
        $rutas = new RutasControlador();
        $rutas -> RutasPublico();
    ?>

    <footer>
        <section class="container foot">
            <div class="row">
                <div class="col-4">
                    <img src="Vista/img/logoia.jfif" alt="logo" width="400">
                </div>
                <div class="col-8">
                    <div class="row espaciocontacto">
                        <div class="col">
                            <h2 class="contactoh2">
                                Contactanos:
                            </h2>
                            <div class="disflex contacto">
                                <img src="Vista/img/correo.png" alt="" width="50">
                                <p>escom.alumno.ipn.mx</p>
                            </div>
                            <div class="disflex contacto">
                                <img src="Vista/img/tel.png" alt="" width="50">
                                <p>5512345678</p>
                            </div>
                            <div class="disflex contacto">
                                <img src="Vista/img/ubicacion.png" alt="" width="50">
                                <p>Escuela Superior de Cómputo</p>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="contactoh2">
                                Siguenos:
                            </h2>
                            <div class="disflex margenredes">
                                <img src="Vista/img/face.png" alt="face" width="60">
                                <img src="Vista/img/x.png" alt="" width="60">
                                <img src="Vista/img/youtube.png" alt="" width="60">
                                <img src="Vista/img/insta.png" alt="" width="60">
                                <img src="Vista/img/tiktok.png" alt="" width="60">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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