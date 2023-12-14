<?php
    include_once '../../Controlador/EmpleadosC.php';
    require_once "../../Modelo/EmpleadosM.php";
    include "../../Libreria/phpqrcode-master/qrlib.php";
    $idp = $_GET["id"];
    ob_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREDENCIAL</title>

</head>
<body>
    <?php
            $detalles = new EmpleadosC();
            $detalles -> CredencialC();
    ?>
</body>
</html>
<?php
    $html = ob_get_clean();
    //echo $html;

    require_once '../../Libreria/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->set(array('isHtml5ParserEnabled' => true, 'isPhpEnabled' => true, 'isPhpExecuting' => true, 'isRemoteEnabled' => true));
    $dompdf->setOptions($options);
    $dompdf->set_option('dpi', 200);
    $dompdf->set_paper(array(0, -25, 110, 180), 'portrait');
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("Credencial_'$idp'.pdf", array("Attachment" => false));
?>