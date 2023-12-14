<?php
    include_once '../../Controlador/ReporteC.php';
    require_once "../../Modelo/ReporteM.php";
    $nombreImagen = "../img/name.png";
    $nombreImagen2 = "../img/logoia.jfif";
    $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
    $imagenBase642 = "data:image/jfif;base64," . base64_encode(file_get_contents($nombreImagen2));
    ob_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>

</head>
<body>
    <div>
        <div style="margin-top: 100px;">
            <table align="center">
                <tr>
                    <td><img src="<?php echo $imagenBase64 ?>" width="300" height="auto"></td>
                </tr>
            </table>
        </div>
        

        <?php
            $detalles = new ReporteC();
            $detalles -> DetallesReporteC();
        ?>
        <div style="margin-top:200px">
            <table>
                <tr>
                    <td>
                        <div>
                            <p>_____________________</p>
                            <p>ATENDIÓ EL SERVICIO</p>
                            <p>&nbsp;&nbsp;&nbsp;NOMBRE Y FIRMA</p>
                        </div>
                    </td>
                    <td><div style="width:730px;"></div></td>
                    <td>
                        <div>
                            <p>___________________</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USUARIO</p>
                            <p>NOMBRE Y FIRMA</p>
                        </div>
                    </td>
                </tr>
            </table>
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