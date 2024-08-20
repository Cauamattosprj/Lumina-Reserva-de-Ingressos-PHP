<?php

include "functions.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Lumina - Reserva de Ingressos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <img src="#foto" alt="Logo Lumina">

    <div class="formulario-login" >
        <form method="post">
            <fieldset>

                <h2>Estamos felizes em te ver novamente!</h2>
                <p>Realize o seu login:</p>

                <legend>Campo de login do site Lumina - Reserva de Ingressos</legend>

                <label for="email_login">Email:</label>
                <input type="text" name="email_login"><br>
                <label for="senha_login">Senha:</label>
                <input type="password" name="senha_login"><br>
                <input type="submit">

                <?php 
                login_user();
                ?>
            </fieldset>
            
        </form>
    </div>

    <div>
        <a href="sign-up.php">
            Realize seu cadastro
        </a>

        <a href="#resetsenha">
            Esqueci minha senha
        </a>
    </div>

</body>
</html>