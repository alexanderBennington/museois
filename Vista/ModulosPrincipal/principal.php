    <section id="img-prin">
        <div id="img-prin-tex">
            <h1>MUSEUM</h1>
            <h2>Un viaje al pasado</h2>
        </div>
    </section>

    <section id="marcas" class="cent-v">
        <div>
            <img src="Vista/img/googlead.png" alt="google" width="200">
        </div>
        <div>
            <img src="Vista/img/apple.png" alt="apple" width="200">
        </div>
        <div>
            <img src="Vista/img/meta.png" alt="meta" width="200">
        </div>
        <div>
            <img src="Vista/img/nike.png" alt="nike" width="200">
        </div>
    </section>

    <section id="anunciossec">
        <div class="home-demo">
            <div class="row">
                <div class="large-12 columns">
                    <div class="owl-carousel" align="center">
                        
                        <?php
                            $mostraranuncio = new AnunciosC();
                            $mostraranuncio -> MostrarAnunciosPublicoC();
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
            margin: 10,
            loop: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 2
                },
                1000: {
                items: 3
                }
            }
            })
        </script>
    </section>
    
    <?php
        $mostrarmodal = new AnunciosC();
        $mostrarmodal -> MostrarModalC();
    ?>