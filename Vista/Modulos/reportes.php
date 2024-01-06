<div class="fondosesion">
<div class="container">
    <h2 align=center>SOLICITUDES</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No. DE SOLICITUD</th>
                    <th scope="col">ARTICULO</th>
                    <th scope="col">ENCARGADO</th>
                    <th scope="col">FECHA DE REGISTRO</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">DETALLES</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrarsolicitudes = new SolicitudC();
                    $reportes = new ReporteC();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['generar'])) {
                            $reportes->GenerarReporteC();
                        } elseif (isset($_POST['eliminar'])) {
                            $reportes->EliminarReporteC();
                        }
                    }
                    $mostrarsolicitudes -> MostrarSolicitudAprobadaC();
                ?>
            </tbody>
        </table>
    </div>

    <h2 align=center>REPORTES</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No. DE REPORTE</th>
                    <th scope="col">ARTICULO</th>
                    <th scope="col">ENCARGADO</th>
                    <th scope="col">FECHA DE ENTREGA</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $reportes -> MostrarReporteC();
                ?>
            </tbody>
        </table>
    </div>

    <h2 align=center>Graficas</h2>
    <div>
        <canvas id="myChart"></canvas>
        <?php
            $data = $reportes -> GraficaCuentaSolicitudC();
        ?>
    </div>

    <div>
        <canvas id="myChart2"></canvas>
        <?php
            $data2 = $reportes -> GraficaCuentaAnomaliasC();
        ?>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($data, 'nombre_obra')); ?>,
            datasets: [{
                label: 'Grafica Cantidad de Solicitudes por Obra',
                data: <?php echo json_encode(array_column($data, 'cantidad_repeticiones')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            
        }
    });

    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($data2, 'tipo')); ?>,
            datasets: [{
                label: 'Grafica Tipo de Anomalias Comunes',
                data: <?php echo json_encode(array_column($data2, 'cantidad_repeticiones')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            
        }
    });
</script>
