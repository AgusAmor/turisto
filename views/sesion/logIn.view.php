<main>
<section>
    <form action="scripts/sesion/logInCheck.php" method="post" class="formSesion">
        <img src="img/banner-index.png" alt="">
        <a href="/web-app-turisto/">&#10094</a>
        <fieldset>
            <div class="campoForm">
                <label for="user">Email</label>
                <input type="email" name="user" id="user" required />
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
</section>
</main>