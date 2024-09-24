<body class="<?php echo isset($data['bodyClass']) ? $data['bodyClass'] : ''; ?>">
<main>
<section>
    <form action="model/signUpCheck.php" method="post" class="formRegistrarse">
        <img src="img/fondoForm.png" alt="fondoForm">
        <a href="/web-app-turisto/">&#10094</a>
        <fieldset>
            <div class="campoForm" id="nombreApellido">
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" maxlength="20" required />
                </div>

                <div>
                    <label for="surname">Apellido</label>
                    <input type="text" name="surname" id="surname" maxlength="20" required />
                </div>
            </div>
            <div class="campoForm">
                <label for="nationality">Nacionalidad</label>
                <input type="text" name="nationality" id="nationality" maxlength="30" required />
            </div>
            <div class="campoForm" id="mediosContacto">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" maxlength="50" required />
                </div>
                
                <div>
                    <label for="phone">Telefono</label>
                    <input type="number" name="phone" id="phone" maxlength="20" required />
                </div>
            </div>
            <div class="campoForm" id="contrasenias">
               <div>
                 <label for="pass">Contraseña</label>
                 <input type="password" name="pass" id="pass" maxlength="15" required />
               </div>

                <div>
                    <label for="pass2">Confirme su contraseña</label>
                    <input type="password" name="pass2" id="pass2" maxlength="15" required />
                </div>
            </div>
            <div id="terminosContenedor">
                <input type="checkbox" name="terms" id="terms" required />
                <label for="terms">He leído y estoy de acuerdo con los <a href="" id="terminos">Términos y condiciones</a></label>
            </div>
            <div class="campoForm">
                <input type="submit" value="Registrarse" id="registrarse">
            </div>
            <div class="redirectSesion">
                <p>¿Ya eres parte de Turisto? </p><a href="/web-app-turisto/logIn" id="logInRedirect" >Inicia Sesión</a>
            </div>
        </fieldset>
    </form>
</section>
</main>
</body>