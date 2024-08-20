<?php
function new_user()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {

        try 
        {
            $dbh = new PDO("mysql:host=localhost;dbname=lumina", "root", "");

            $email_usuario = $_POST["email_usuario"];
            $nome_usuario = $_POST["nome_usuario"];
            $data_nascimento = $_POST["data_nascimento"];
            $senha_usuario = $_POST["senha_usuario"];


            $stmt = $dbh->prepare("INSERT INTO users (email_usuario, nome_usuario, senha_usuario, data_nascimento) VALUES (?, ?, ?, ?)");

            $stmt->bindParam(1, $email_usuario);
            $stmt->bindParam(2, $nome_usuario);
            $stmt->bindParam(3, $senha_usuario);
            $stmt->bindParam(4, $data_nascimento);

            $stmt->execute();
            
            echo "Conta registrada com sucesso! Redirecionando para tela de login...";

            sleep(5);

            header("Location: login.php");


        } 
        catch (PDOException $e) 
        {
            echo "Erro de conexão: " . $e->getMessage();
        }

    }
}

function login_user()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        try 
        {
            $dbh = new PDO("mysql:host=localhost;dbname=lumina", "root", "");

            $email_login = $_POST["email_login"];
            $senha_login = $_POST["senha_login"];

            # irá verificar se o e-mail está presente no banco de dados
            $stmt = $dbh->prepare("SELECT email_usuario, senha_usuario, id FROM users WHERE email_usuario = :email");
            $stmt->bindParam(':email', $email_login);
            $stmt->execute();

            # fetch do resultado
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            # SE resultado correto:
            if (strcmp($senha_login, $result['senha_usuario']) == 0)
            {
                header("location: home.php");
                $_SESSION['session_id'] = $result['id'];
            }
            else
            {
                echo "Credenciais incorretas. Tente novamente.";
            }
        } 
        catch (PDOException $e) 
        {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}


function check_login() 
{
    include "connection.php";

    if(isset($_SESSION['user_id'])) {
        
        $id = $_SESSION['user_id'];

        # será feito uma consulta ao banco de dados para ver se há algum usuário com esse ID.
        $stmt = $dbh->prepare("SELECT * FROM users WHERE user_id = '$id'");

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        # se o ID retornado do banco de dados corresponder ao ID do usuário, o usuário será dado como logado e a função irá retornar a variável $id para o $_SESSION, definindo o id da sessão atual como o id do usuário no banco de dados e o  controle de login será feito dessa forma ao longo do código.
        if (strcmp($result, $id) == 0)
        {
            echo "LOGADO";
            return $id;
            
        }
        else
        {
            header("location: login.php");
        }        
    } 
    else 
    {
        echo "NÃO LOGADO";
        header("location: /login.php");
    }

    $dbh = null;

};