<main>
<section>
    <form action="scripts/sesion/signUpCheck.php" method="post" class="formRegistrarse">
        <!-- <img src="img/banner-index.png" alt=""> -->
        <a href="/web-app-turisto/">&#10094</a>
        <fieldset>
            <div class="campoForm">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required />

                <label for="surname">Apellido</label>
                <input type="text" name="surname" id="surname" required />
            </div>
            <div class="campoForm">
                <label for="nacionality">Nacionalidad</label>
                <input type="text" name="nacionality" id="nacionality" required />
            </div>
            <div class="campoForm">
                <label for="phone">Telefono</label>
                <input type="number" name="phone" id="phone" required />
            </div>
            <div class="campoForm">
                <label for="user">Email</label>
                <input type="email" name="user" id="user" required />
            </div>
            <div class="campoForm">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" required />
            </div>
            <div class="campoForm">
                <label for="pass2">Confirme su contraseña</label>
                <input type="password" name="pass2" id="pass2" required />
            </div>
            <input type="submit" value="Registrarse" id="registrarse">
        </fieldset>
    </form>
</section>
</main>