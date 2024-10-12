<body>
    <header id="header">
        <a href="/web-app-turisto/" class="logo"><img src="public/img/logo.png" alt="Inicio"></a>
        <a href="/web-app-turisto/"><img src="public/img/logoMobile.png" class="logoMobile" alt="Inicio"></a>
        <button id="burger"><i class="bi bi-list"></i></button>
        <div id="headerBar">
            <!-- <nav class="navbar">
                <li><a href="/web-app-turisto/">Inicio</a></li>
                <li><a href="#">Sedes</a></li>
                <li><a href="#">Paquetes de vuelos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </nav> -->
            <div id="sesion_contenedor" >
            <?php
            if (isset($_SESSION['email'])){
                echo "
                    <a href=app/model/logOut.php>Cerrar sesión </a>
                ";
            }else{
                echo "
                    <button id=btn_iniciarSesion >Iniciar sesión </button>
                    <a href=/web-app-turisto/signUp >Registrarse </a>
                ";
            }
            ?>
            </div>
        </div>
        
        <?php
        if(isset($_GET['user']) || isset($_GET['password']) || isset($_GET['banned']) || isset($_GET['email'])){
            echo "<div id=modalContainer style=transform:translateY(0%);opacity:1>";
        }else{
            echo "<div id=modalContainer>";
        }
        ?>
            <form action="app/model/logInCheck.php" method="post" class="formSesion" id="formSesionModal">
                <img src="public/img/fondoForm.png" alt="">
                <button id="btn_cerrarModal"><i class="bi bi-x"></i></button>
                <fieldset>
                    <div class="campoForm">
                        <label for="user">Email</label>
                        <input type="email" name="user" id="user" maxlength="40" pattern="[A-Za-z\s-@]+" required />
                    </div>
                    <div class="campoForm">
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="pass" required />
                    </div>
                    <input type="submit" value="Iniciar Sesión" id="iniciarSesion">
                    <div class="redirectSesion">
                        <p>¿Todavía no sos parte de Turisto? </p><a href="/web-app-turisto/signUp" id="signUpRedirect">Registrate</a>
                    </div>
                </fieldset>
            </form>
            <?php
                if(isset($_GET['user'])){
                    if($_GET['user'] == 'banned'){
                        echo "<p id=errorMessage >El usuario con el que intenta ingresar tiene denegado el acceso a nuestro sitio. Por favor comuníquese con un administrador.</p>";
                    }else if($_GET['user'] == 'registed'){
                        echo "<p id=errorMessage >Ya puede iniciar sesión.</p>";
                    }else if($_GET['user'] == 'userNotFound'){
                        echo "<p id=errorMessage >El email con el que intenta ingresar no esta registrado.</p>";
                    }
                }else if(isset($_GET['password'])){
                    if($_GET['password'] == 'wrongPassword'){
                        echo "<p id=errorMessage >La contraseña con la que intenta ingresar es incorrecta.</p>";
                    }
                }
            ?>
        </div>
        <div id="headerBarMobile">
            <button id="closeNavBar"><i class="bi bi-x-lg"></i></button>
                <div class="navbarMobile">
                    <!-- <nav>
                        <li><a href="/web-app-turisto/">Inicio</a></li>
                        <li><a href="#">Sedes</a></li>
                        <li><a href="#">Paquetes de vuelos</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </nav> -->
                </div>
                <div id="sesion_contenedor" >
                <?php
                if (isset($_SESSION['email'])){
                    echo "
                        <a href=app/model/logOut.php>Cerrar sesión </a>
                    ";
                }else{
                    echo "
                        <button id=btn_iniciarSesion2 >Iniciar sesión </button>
                        <a href=/web-app-turisto/signUp >Registrarse </a>
                    ";
                }
                ?>
                </div>
        </div>
        <?php
        if (isset($_GET['userNull'])){
            echo "
            <div id=modalErrorContainer>
                <div id=modalError>
                <p>Inicie sesión antes de contactar a un asesor.</p>
                <button id=btn_cerrarModalError>Iniciar Sesión</button>
                </div>
            </div>
            ";
        }
        ?>
    </header>