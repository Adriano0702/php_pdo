<?php
//Declarar as variaveis do servidor
$server = "localhost";
$user = "root";
$pass = "";
$db = "pdoprojeto";
 
 
    try{
        //conexão
        $con = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        //atributos de condiz o tipo de mensagem(static);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo"Conectado!!!";
    }
    catch(PDOException $er){
        echo "erro".$er->getMessage();
    }
 
?>
