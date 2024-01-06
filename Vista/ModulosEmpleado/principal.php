<div class="fondosesion">
<div class="container">
    <h2>Hola <?php echo $_SESSION["nombre"]; ?></h2>
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
                            $chat->RedirigirChatEmpleadosC();
                        } elseif(isset($_POST['chatgeneral'])){
                            $chat->RedirigirChatGeneralEmpleadosC();
                        } elseif(isset($_POST['seleccionaridadmin'])){
                            $chat->RedirigirChatAdminC();
                        }
                    }
                    $mostrarempleados -> MostrarEmpleadosChatC();
                ?>
            </tbody>
        </table>
    </div>
    <form method="POST">
        <div class="d-grid gap-2">
            <button class="btn btn-danger" type="submit" name=chatgeneral >Ir a Chat General</button>
        </div>
    </form>
    <h2 style="margin-top:50px;" align=center>CHAT ADMINISTRADORES</h2>
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ADMINISTRADOR</th>
                    <th scope="col">AREA</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostraradministradores = new AdministradoresC();
                    $mostraradministradores -> MostrarAdministradoresChatC();
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>