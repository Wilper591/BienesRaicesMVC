<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" action="/login" novalidate>
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-Mail</label>
            <input type="email" name="email" placeholder="Tu Correo electrónico" id="email" required>

            <label for="password">password</label>
            <input type="password" name="password" placeholder="Tu Password" id="password" required>
        </fieldset>
        <input type="submit" value="Inciar Sesión" class="boton boton-verde">
    </form>
</main>