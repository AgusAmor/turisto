<body>
    <header id="header">
        <a href="/web-app-turisto/" class="logo"><img src="img/logo.png" alt="Inicio"></a>
        <div id="headerBar">
            <nav class="navbar">
                <li><a href="/web-app-turisto/">Inicio</a></li>
                <li><a href="#">Sedes</a></li>
                <li><a href="#">Paquetes de vuelos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </nav>
            <div id="sesion_contenedor" >
            <?php
            if (isset($_SESSION['email'])){
                echo "
                    <a href=model/logOut.php>Cerrar sesión </a>
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
            echo "<div id=modalContainer class=open >";
        }else{
            echo "<div id=modalContainer>";
        }
        ?>
            <form action="model/logInCheck.php" method="post" class="formSesion">
                <img src="img/fondoForm.png" alt="">
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
        </div>
    </header>