<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Lumina - Reserva de Ingressos</title>
</head>
<body>

    <img src="#foto" alt="Logo Lumina">

    <form method="POST">
        <fieldset>

            <h2>Crie sua conta!</h2>
            <p>Preencha as informações abaixo:</p>

            <legend>Campo de cadastro do site Lumina - Reserva de Ingressos</legend>

            <label for="email_usuario">Email:</label>
            <input type="text" name="email_usuario" autofocus required><br>
            
            <label for="nome_usuario">Nome completo:</label>
            <input type="text" name="nome_usuario" required><br>
            
            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" name="data_nascimento" required min=""><br>
            
            <label for="senha_usuario">Senha:</label>
            <input type="password" name="senha_usuario" required><br>

            <label for="confirma_senha">Confirme sua senha:</label>
            <input type="password" name="confirma_senha" required><br>

            <label for="aceite_termos">Confirmo que li e concordo com os termos de uso da Lumina</label><br>
            <input type="checkbox" name="aceite_termos" required><br>
            
            <input type="submit">

            <?php 
                include "functions.php";

                new_user();
            ?>
        </fieldset>
        
    </form>

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