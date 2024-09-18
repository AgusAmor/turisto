<?php $title = 'Home - Turisto'?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/header.php'; ?>

<main>
    <h1></h1>
    <section>
        <div id="bannerForm">
            <img src="https://placehold.co/1920x700" alt="">
            <form action="#" method="post" id="formIndex">
                <fieldset>
                    <legend>Title</legend>
                    <div class="campoForm select">
                        <label for="origen">Origen</label>
                        <select name="origen" id="origen">
                            <option value="argentina">Argentina</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="colombia">Colombia</option>
                            <option value="chile">Chile</option>
                        </select>
                    </div>
                    <div class="campoForm select">
                        <label for="destino">Destino</label>
                        <select name="destino" id="destino">
                            <option value="argentina">Argentina</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="colombia">Colombia</option>
                            <option value="chile">Chile</option>
                        </select>
                    </div>
                    <div class="campoForm">
                        <label for="ida">Fecha de salida</label>
                        <input type="date" name="ida" id="ida">
                        <label for="vuelta">Fecha de retorno</label>
                        <input type="date" name="vuelta" id="vuelta">
                    </div>
                    <div class="campoForm">
                        <caption>Pasajeros</caption>
                        <label for="adultos">Adultos:</label>
                        <input type="number" name="adultos" id="adultos">
                        <label for="ninios">Niños (<2 años):</label>
                        <input type="number" name="ninios" id="ninios">
                        <label for="mascotas">Mascotas:</label>
                        <input type="number" name="mascotas" id="mascotas">
                    </div>
                    <div class="botoneraForm">
                        <input type="submit" value="Hablar con mi asesor" >
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

    <div id="navIndex">
        <nav>
            <li><a href="#nacionales">Vuelos Nacionales</a></li>
            <li><a href="#internacionales">Vuelos Internacionales</a></li>
            <li><a href="#cruceros">Cruceros</a></li>
            <li><a href="#paquetes">Paquetes</a></li>
        </nav>
    </div>

    <section>
        <h2 id="nacionales">Vuelos nacionales</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <h2 id="internacionales">Vuelos internacionales</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="bannerIndex">
        <img src="https://placehold.co/1920x900" alt="">
    </section>
    <section>
        <h2 id="cruceros">Cruceros</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <h2 id="paquetes">Paquetes</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/300x300" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <h3 >Aliados comerciales</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/200x100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/200x100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-auto m-auto" src="https://placehold.co/200x100" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

</main>

<?php require 'partials/footer.php'; ?>