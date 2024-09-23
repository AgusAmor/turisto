<main>
<section>
    <form action="scripts/sesion/signUpCheck.php" method="post" class="formRegistrarse">
        <!-- <img src="img/banner-index.png" alt=""> -->
        <a href="/web-app-turisto/">&#10094</a>
        <fieldset>
            <div class="campoForm">
                <label for="name">Nombre <strong>*</strong></label>
                <input type="text" name="name" id="name" maxlength="20" required />

                <label for="surname">Apellido <strong>*</strong></label>
                <input type="text" name="surname" id="surname" maxlength="20" required />
            </div>
            <div class="campoForm">
                <label for="nacionality">Nacionalidad <strong>*</strong></label>
                <input type="text" name="nacionality" id="nacionality" maxlength="30" required />
            </div>
            <div class="campoForm">
                <label for="phone">Telefono <strong>*</strong></label>
                <input type="number" name="phone" id="phone" maxlength="20" required />
            </div>
            <hr>
            <div class="campoForm">
                <label for="user">Email <strong>*</strong></label>
                <input type="email" name="user" id="user" maxlength="50" required />
            </div>
            <div class="campoForm">
                <label for="pass">Contraseña <strong>*</strong></label>
                <input type="password" name="pass" id="pass" maxlength="15" required />
            </div>
            <div class="campoForm">
                <label for="pass2">Confirme su contraseña</label>
                <input type="password" name="pass2" id="pass2" maxlength="15" required />
            </div>
            <div class="campoForm">
                <input type="checkbox" name="terms" id="terms" required />
                <label for="terms">He leído y estoy de acuerdo con los <a href="" id="terms">Términos y condiciones</a></label>
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