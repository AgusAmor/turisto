<main>
    <h1></h1>
    <section>
        <div id="bannerForm">
            <img src="img/banner-index.png" alt="bannerIndex">
            <form action="model/contactAssessor.php" method="get" id="formIndex">
                <fieldset>
                    <legend>Busca tu destino *avion*</legend>
                    <div class="campoForm select">
                        <label for="origen">Origen</label>
                        <input type="text" name="origen" id="origen" required />
                        <!-- <select name="origen" id="origen">
                            <option value="argentina">Argentina</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="colombia">Colombia</option>
                            <option value="chile">Chile</option>
                        </select> -->
                    </div>
                    <div class="campoForm select">
                        <label for="destino">Destino</label>
                        <input type="text" name="destino" id="destino" required />
                        <!-- <select name="destino" id="destino">
                            <option value="argentina">Argentina</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="colombia">Colombia</option>
                            <option value="chile">Chile</option>
                        </select> -->
                    </div>
                    <div class="campoForm">
                        <div class="fechasNormal">
                            <label for="ida">Fecha de salida</label>
                            <input type="date" name="ida" id="ida" required />
                            <label for="vuelta">Fecha de retorno</label>
                            <input type="date" name="vuelta" id="vuelta" required />
                        </div>
                        <div class="contenedorFecha">
                            <label for="ida">Fecha de salida</label>
                            <input type="date" name="ida" id="ida" required />
                        </div>
                        <div class="contenedorFecha">
                            <label for="vuelta">Fecha de retorno</label>
                            <input type="date" name="vuelta" id="vuelta" required />
                        </div>
                    </div>
                    <div class="campoForm pasajerosO">
                        <caption>Pasajeros</caption>
                        <label for="adultos">Adultos:</label>
                        <input type="number" name="adultos" id="adultos" min=0 max=10 step=1 placeholder=0>
                        <label for="ninios">Niños (<2 años):</label>
                        <input type="number" name="ninios" id="ninios" min=0 max=10 step=1 placeholder=0>
                        <label for="mascotas">Mascotas:</label>
                        <input type="number" name="mascotas" id="mascotas" min=0 max=10 step=1 placeholder=0>
                    </div>
                    <div class="campoForm pasajeros">
                        <caption>Pasajeros</caption>
                        <div>
                            <label for="adultos">Adultos:</label>
                            <input type="number" name="adultos" id="adultos" min=0 max=10 step=1 placeholder=0>
                        </div>
                        <div>
                            <label for="ninios">Niños (<2 años):</label>
                            <input type="number" name="ninios" id="ninios" min=0 max=10 step=1 placeholder=0>
                        </div>
                        <div>
                            <label for="mascotas">Mascotas:</label>
                            <input type="number" name="mascotas" id="mascotas" min=0 max=10 step=1 placeholder=0>
                        </div>
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
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
            </div>
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <section>
        <h2 id="internacionales">Vuelos internacionales</h2>
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
            </div>
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <section class="bannerIndex">
        <img src="https://placehold.co/1920x700" alt="">
    </section>
    <section>
        <h2 id="cruceros">Cruceros</h2>
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
            </div>
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <section>
        <h2 id="paquetes">Paquetes</h2>
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="https://placehold.co/200x200" alt="">
                    </div>
                </div>
            </div>
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <section>
        <h3 >Aliados comerciales</h3>
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
            </div>
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>

</main>