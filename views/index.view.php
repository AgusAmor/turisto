<main>
    <h1></h1>
    <?php
    if(isset($_GET['id_package'])){
        echo "<div id=modalPackageContainer class=open >";

        $id_package = $_GET['id_package'];

        if(isset($_GET['country'])){
            $country = $_GET['country'];
        }
        if(isset($_GET['city'])){
            $city = $_GET['city'];
        }
        if(isset($_GET['passengers'])){
            $passengers = $_GET['passengers'];
        }
        if(isset($_GET['description'])){
            $description = $_GET['description'];
        }
        if(isset($_GET['image'])){
            $image = $_GET['image'];
        }
        if(isset($_GET['transfer'])){
            $transfer = $_GET['transfer'];
        }
        if(isset($_GET['luggage'])){
            $luggage = $_GET['luggage'];
        }
        if(isset($_GET['lodging'])){
            $lodging = $_GET['lodging'];
        }

        $destination = (!empty($city)) ? $city . ", " . $country : $country;

    }else{
        echo "<div id=modalPackageContainer >";
    }
    echo "
    <button id=btn_cerrarModalPackage ><i class='bi bi-x' ></i></button>
    <div id=modalPackage >
        <img src=$image alt=$country />
        <div>
            <h2>Viaja a $destination</h2>
            <ul>";
            if(!empty($transfer)){
                echo "<li>Tanslado</li>";
            }
            if(!empty($luggage)){
                echo "<li>Equipaje $luggage</li>";
            }
            if(!empty($lodging)){
                echo "<li>Hospedaje</li>";
            }
        echo"</ul>
            <p>$description</p>
        </div>
    </div>
    </div>
    ";
    ?>
<section>
        <div id="bannerForm">
            <img src="img/banner-index.png" alt="bannerIndex">
            <form action="model/contactAssessor.php" method="get" id="formIndex">
                <fieldset>
                    <legend>Busca tu destino <svg id="avion" data-name="avion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.131 32"><title>avion</title><path d="M30.9,12.057a.636.636,0,0,1-.357.554l-10.56,5.82L22.625,22.1a.313.313,0,0,0,.031.039c.1-.022.227-.048.344-.071l4.484-.884a1.753,1.753,0,0,1,.938.106l.845.38a.623.623,0,0,1,.4.564h0a.633.633,0,0,1-.366.556l-5.76,3.064a1.611,1.611,0,0,0-.383.324l-4.272,5.548a.6.6,0,0,1-1.095-.23l-.218-.9a1.865,1.865,0,0,1,.053-.933l1.628-4.492.054-.146-.034-.033-3.3-3.248L8.34,31.009a.605.605,0,0,1-1.1-.248l-.6-2.483a1.77,1.77,0,0,1,.068-.943l2.263-5.661a.819.819,0,0,1-.253-.989l.249-.547a.844.844,0,0,1,.465-.445.715.715,0,0,1,.347-.039l.206-.517A.817.817,0,0,1,9.7,18.128l.247-.548a.829.829,0,0,1,.461-.435.74.74,0,0,1,.428-.029l.212-.467a.105.105,0,0,0-.014-.086s-.956-1.023-1.539-1.677C7.784,13.015,6.744,11.817,5.169,10,3.617,8.266.77,2.619.77.9A.9.9,0,0,1,1.01.21.832.832,0,0,1,1.661,0C3.371.1,8.643,4.238,10,5.883c1.692,2,2.648,3.168,4.147,5.034.549.663,1.4,1.752,1.4,1.752a.182.182,0,0,0,.1.03l.277-.068a.8.8,0,0,1,.579-.8l.572-.175a.806.806,0,0,1,.991.488l.53-.1c0-.026,0-.054,0-.082a.807.807,0,0,1,.57-.765l.577-.176a.809.809,0,0,1,1,.528l.021.068,6.47-1.277a1.75,1.75,0,0,1,.936.105L30.5,11.49A.625.625,0,0,1,30.9,12.057ZM19.009,18.381a.763.763,0,0,1,.4-.663l10.218-5.631L27.8,11.265a.874.874,0,0,0-.394-.043l-6.521,1.287a.852.852,0,0,1-.969-.576l-.007-.025-.4.121a.8.8,0,0,1,.01.125.758.758,0,0,1-.624.747l-.711.139a.855.855,0,0,1-.939-.494l-.405.124a.782.782,0,0,1-.6.812l-.381.093a1.028,1.028,0,0,1-1.021-.349s-.845-1.078-1.391-1.739c-1.5-1.864-2.451-3.03-4.14-5.025C7.768,4.6,2.8,1,1.672.9c.007,1.407,2.655,6.8,4.174,8.505,1.63,1.878,2.612,3.008,4.32,4.876.582.653,1.531,1.668,1.531,1.668a1.038,1.038,0,0,1,.172,1.074l-.246.543a.83.83,0,0,1-.461.434.739.739,0,0,1-.428.029l-.177.393a.841.841,0,0,1,.295.985l-.267.667a.825.825,0,0,1-.451.465.684.684,0,0,1-.375.041l-.182.4a.832.832,0,0,1,.259.963L7.549,27.67a.844.844,0,0,0-.04.271.512.512,0,0,0,.011.124l.472,1.948,7.377-8.953a.782.782,0,0,1,.563-.284.772.772,0,0,1,.579.228L19.9,24.345c.307.294.368.443.368.6v.1l-.046.1c-.007.02-.063.17-.122.332l-1.628,4.493a1.589,1.589,0,0,0-.024.414l.078.323,3.914-5.082a2.408,2.408,0,0,1,.672-.569l5.262-2.8-.324-.145a.884.884,0,0,0-.4-.044l-4.483.884c-.181.035-.39.079-.463.1-.409.1-.731-.3-.821-.427L19.157,18.83A.76.76,0,0,1,19.009,18.381Z" transform="translate(-0.77 0)"/></svg></legend>
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
                            <input type="date" name="ida" id="ida" onkeydown="return false;" onclick="this.showPicker();" required />
                            <label for="vuelta">Fecha de retorno</label>
                            <input type="date" name="vuelta" id="vuelta" onkeydown="return false;" onclick="this.showPicker();" required />
                        </div>
                        <div class="contenedorFecha">
                            <label for="ida">Fecha de salida</label>
                            <input type="date" name="ida" id="ida" onkeydown="return false;" onclick="this.showPicker();" required />
                        </div>
                        <div class="contenedorFecha">
                            <label for="vuelta">Fecha de retorno</label>
                            <input type="date" name="vuelta" id="vuelta" onkeydown="return false;" onclick="this.showPicker();" required />
                        </div>
                    </div>
                    <div class="campoForm pasajerosO">
                        <caption>Pasajeros</caption>
                        <label for="adultos">Adultos:</label>
                        <input type="number" name="adultos" id="adultos" min=0 max=10 step=1 placeholder=0>
                        <label for="ninios">Niños: </label>
                        <span class="niniosSpan" title="Menores de 2 años">?</span>
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
                            <label for="ninios">Niños: </label>
                            <span class="niniosSpan" title="Menores de 2 años">?</span>
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
            <li><a href="#paquetes">Paquetes</a></li>
            <li><a href="#cruceros">Cruceros</a></li>
            <li><a href="#internacionales">Vuelos Internacionales</a></li>
            <li><a href="#nacionales">Vuelos Nacionales</a></li>
        </nav>
    </div>

    <section class="sectionSlides">
        <h2 id="paquetes">Paquetes</h2>
        <div class="btn_slides">
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
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
            </div>
        </div>
    </section>
    <section class="sectionSlides">
        <h2 id="cruceros">Cruceros</h2>
        <div class="btn_slides">
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
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
            </div>
        </div>
    </section>
    <section class="bannerIndex">
        <img src="https://placehold.co/1920x700" alt="">
    </section>
    <section class="sectionSlides">
        <h2 id="internacionales">Vuelos Internacionales</h2>
        <div class="btn_slides">
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
        <div class="slider-container">
        <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/aruba.jpg" alt="aruba">
                        <button class="btn_package" data-id_package="1">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/barcelona.jpg" alt="barcelona">
                        <button class="btn_package" data-id_package="2">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/madrid.jpg" alt="madrid">
                        <button class="btn_package" data-id_package="3">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/mexico.jpg" alt="mexico">
                        <button class="btn_package" data-id_package="4">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/paris.jpg" alt="paris">
                        <button class="btn_package" data-id_package="5">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/portugal.jpg" alt="portugal">
                        <button class="btn_package" data-id_package="6">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/rio.jpg" alt="rio">
                        <button class="btn_package" data-id_package="7">Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/internacionales/roma.jpg" alt="roma">
                        <button class="btn_package" data-id_package="8">Ver mas...</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionSlides">
        <h2 id="nacionales">Vuelos Nacionales</h2>
        <div class="btn_slides">
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
        <div class="slider-container">
        <div class="slider">
                <div class="slide">
                    <div class="card">
                        <img src="img/nacionales-argentina/bariloche.jpg" alt="bariloche">
                        <button>Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/nacionales-argentina/iguazu.jpg" alt="iguazu">
                        <button>Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/nacionales-argentina/mendoza.jpg" alt="mendoza">
                        <button>Ver mas...</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="card">
                        <img src="img/nacionales-argentina/salta.jpg" alt="salta">
                        <button>Ver mas...</button>
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
        </div>
    </section>
    <section class="sectionSlides">
        <h3 >Aliados comerciales</h3>
        <div class="btn_slides">
            <button class="prev" onclick="moverSlide(-1)"><i class="bi bi-chevron-left"></i></button>
            <button class="next" onclick="moverSlide(1)"><i class="bi bi-chevron-right"></i></button>
        </div>
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
                <div class="slide">
                    <img src="https://placehold.co/200x100" alt="">
                </div>
            </div>
        </div>
    </section>

</main>