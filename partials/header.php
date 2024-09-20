<body>
    <header>
        <a href="/web-app-turisto/" class="logo"><img src="img/header.png" alt="Inicio" ></a>
        <div id="headerBar">
            <nav class="navbar">
                <li><a href="/web-app-turisto/">Inicio</a></li>
                <li><a href="#">Sedes</a></li>
                <li><a href="#">Paquetes de vuelos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </nav>
            <div id="sesion_contenedor" >
            <?php
            if (!$_SESSION){
                echo "
                    <a href=/web-app-turisto/logIn >Iniciar sesión </a>
                    <a href=#>Registrarse </a>
                ";
            }else{
                echo "
                    <a href=#>Cerrar sesión </a>
                ";
            }
            ?>
            </div>
        </div>
    </header>