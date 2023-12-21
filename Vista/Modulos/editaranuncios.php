<div class="fondosesion">
<div class="container">
    <h2 align=center>EDITAR ANUNCIOS</h2>
    <div class="row">
        <div class="col">
            <h2 align="center">AGREGAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TÍTULO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=tituloA required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SUBTÍTULO</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=subtituloA required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">CONTENIDO</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=contenidoA required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">IMAGEN</label>
                    <input class="form-control" type="file" id="formFile" name=imagenA required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TIPO DE BOLETO</label>
                    <select class="form-select" aria-label="Default select example" name=dato1A required>
                        <option value="General">GENERAL</option>
                        <option value="Especial">ESPECIAL</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=dato2A required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TIPO DE EVENTO</label>
                    <select class="form-select" aria-label="Default select example" name=dato3A required>
                        <option value="Publico">PUBLICO</option>
                        <option value="Privado">PRIVADO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TEMA</label>
                    <select class="form-select" aria-label="Default select example" name=dato4A required>
                        <option value="Historia">HISTORIA</option>
                        <option value="Arquitectura">ARQUITECTURA</option>
                        <option value="Zoología">ZOOLOGIA</option>
                        <option value="Prehistoria">PREHISTORIA</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">PUBLICADO</label>
                    <select class="form-select" aria-label="Default select example" name=publicadoA required>
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">AGREGAR</button>
            </form>
            <?php
                $agregaranuncios = new AnunciosC();
                $agregaranuncios -> NuevoAnuncioC();
            ?>
        </div>
        <div class="col">
        <h2 align="center">EDITAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="a1" aria-describedby="emailHelp" name=idE required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TÍTULO</label>
                    <input class="form-control" id="a2" aria-describedby="emailHelp" name=tituloE required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SUBTÍTULO</label>
                    <input class="form-control" id="a3" aria-describedby="emailHelp" name=subtituloE required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">CONTENIDO</label>
                    <textarea class="form-control" id="a4" rows="3" name=contenidoE required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">IMAGEN</label>
                    <input class="form-control" type="file" id="formFile" name=imagenE required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TIPO DE BOLETO</label>
                    <select class="form-select" aria-label="Default select example" name=dato1E required>
                        <option value="General">GENERAL</option>
                        <option value="Especial">ESPECIAL</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input class="form-control" id="a5" aria-describedby="emailHelp" name=dato2E required>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TIPO DE EVENTO</label>
                    <select class="form-select" aria-label="Default select example" name=dato3E required>
                        <option value="Publico">PUBLICO</option>
                        <option value="Privado">PRIVADO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">TEMA</label>
                    <select class="form-select" aria-label="Default select example" name=dato4E required>
                        <option value="Historia">HISTORIA</option>
                        <option value="Arquitectura">ARQUITECTURA</option>
                        <option value="Zoología">ZOOLOGIA</option>
                        <option value="Prehistoria">PREHISTORIA</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">PUBLICADO</label>
                    <select class="form-select" aria-label="Default select example" name=publicadoE required>
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">EDITAR</button>
            </form>
            <?php
                $editaranuncios = new AnunciosC();
                $editaranuncios -> EditarAnuncioC();
            ?>
        </div>
    </div>
</div>

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col">
        <h2 align="center">ELIMINAR</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input class="form-control" id="a6" aria-describedby="emailHelp" name=idEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TÍTULO</label>
                    <input class="form-control" id="a7" aria-describedby="emailHelp" name=tituloEL required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SUBTÍTULO</label>
                    <input class="form-control" id="a8" aria-describedby="emailHelp" name=subtituloEL required readonly>
                </div>
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
            <?php
                $eliminaranuncios = new AnunciosC();
                $eliminaranuncios -> EliminarAnuncioC();
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="tablafondo tablaover">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TÍTULO</th>
                    <th scope="col">SUBTÍTULO</th>
                    <th scope="col">CONTENIDO</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">DATO 1</th>
                    <th scope="col">DATO 2</th>
                    <th scope="col">DATO 3</th>
                    <th scope="col">DATO 4</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">PUBLICADO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostraranuncios = new AnunciosC();
                    $mostraranuncios -> MostrarAnunciosC();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="Vista/js/anuncios.js"></script>

</div>