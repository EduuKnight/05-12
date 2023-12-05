<?php
$host = "127.0.0.1";//"localhost";
$user = "root";
$pass = "root";
$banco = "ssi";
$port = "3306";

global $pdo;
//Orientado a Objetos

try{
    $pdo = new PDO("mysql:dbname=".$banco."; host=". $host, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo"ERRO: ".$e->getMessage();
    // exit;
    // $sql = $pdo->query("SELECT * FROM administrador");
    // $sql->execute();
}