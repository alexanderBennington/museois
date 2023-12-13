<?php
    include_once '../../Controlador/ReporteC.php';
    require_once "../../Modelo/ReporteM.php";
    $logo = "../img/logoof.svg";
    $logoBase64 = "data:image/svg;base64," . base64_encode(file_get_contents($logo));
    ob_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>

    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/museois/CRUD/MVC/Vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/museois/CRUD/MVC/Vista/css/pdfs.css">

</head>
<body>
    <div class="container">
        <table align="center">
            <tr class="tabltit">
                <td><img class="ima1" src="<?php echo $logoBase64 ?>" width="80" height="auto"></td>
                <td>
                    <p class="tit1">
                        MUSEOIS
                    </p>
                    <p class="tit2">ORDEN DE SOPORTE TÉCNICO</p>
                </td>
                <td><img class="ima2" src="<?php echo $logoBase642 ?>" width="130" height="auto"></td>
            </tr>
            <tr class="tabltit">
                <td></td>
                <td><p class="tit3">UNIDAD DE INFORMÁTICA</p></td>
                <td></td>
            </tr>
        </table>
        
            <table align="center" class="firma">
                <tr class="tabltit">
                    <td>
                        <div class="col lineafir">
                            <p class="atendio">ATENDIÓ EL SERVICIO</p>
                            <p class="nombrefirma">NOMBRE Y FIRMA</p>
                        </div>
                    </td>
                    <td><p class="relleno"></p></td>
                    <td>
                        <div class="col lineafir">
                            <p class="atendio">USUARIO</p>
                            <p class="nombrefirma">NOMBRE Y FIRMA</p>
                        </div>
                    </td>
                </tr>
            </table>
            <p align="center" id="tit4">ENCUESTA DE SATISFACCIÓN DEL SERVICIO DE ATENCIÓN</p>
            <p class="indicacion">
                Por favor, dedique unos minutos a completar esta pequeña encuesta, sus respuestas serán tratadas de forma confidencial y serán utilizadas para mejorar el servicio
                que le proporcionamos:
            </p>
            <ol>
                <li>
                    Basándose en su experiencia, valore del 1 al 3(donde 1 es "malo" y 3 "muy excelente") los siguientes aspectos del servicio de atención de la Unidad de Informática
                </li>
            </ol>
            <table class="table tabla">
                <thead>
                    <tr class="tabltit">
                        <td></td>
                        <td class="tabltam">1</td>
                        <td class="tabltam">2</td>
                        <td class="tabltam">3</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr2">
                        <td>Resolución del problema</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rapidez de la respuesta</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tr2">
                        <td>Profesionalismo de la persona que lo atendió</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <ol start="2">
                <li>
                    Por favor, indíquenos su grado de satisfacción general con el servicio de atención de la Unidad de Informática en una escala del 1 al 3, donde 3 es
                    "Completamente satisfecho" y 1 es "Completamente insatisfecho"
                </li>
            </ol>
            <table class="table tabla">
                <thead>
                    <tr class="tabltit">
                        <td></td>
                        <td class="tabltam">1</td>
                        <td class="tabltam">2</td>
                        <td class="tabltam">3</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr2">
                        <td>Satisfacción general con el servicio de la UDI</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p class="pie">
                Este documento es propiedad del CECyT 3, y está prohibida su reproducción parcial o total por cualquier medio electrónico, sin
                autorización por escrito del director
            </p>
        </div>
    </div>
</body>
</html>
<?php
    $html = ob_get_clean();
    //echo $html;

    require_once '../../Libreria/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $idp = $_GET["id"];
    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);
    $dompdf->set_option('dpi', 200);
    $dompdf->load_html($html);
    $dompdf->set_paper("letter");
    $dompdf->render();
    $dompdf->stream("Reporte_'$idp'.pdf", array("Attachment" => false));
?>