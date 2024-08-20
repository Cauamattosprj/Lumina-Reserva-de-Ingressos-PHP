<?php

try 
{
    $dbh = new PDO("mysql:host=localhost;dbname=lumina", "root", "");
} 
catch (PDOException $e) 
{
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
}
