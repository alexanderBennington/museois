<div class="container">
    <h2 align=center>DIRECTORIO</h2>
    <table class="table table-borderless table-dark">
        <thead>
            <tr>
                <th scope="col">ADMINISTRADOR</th>
                <th scope="col">AREA</th>
                <th scope="col">TELEFONO</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $administradores = new AdministradoresC();
                $administradores -> mostrarAdministradoresPublicoC();
            ?>
        </tbody>
    </table>
</div>