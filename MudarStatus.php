<?php
    require 'conexao.php';
    require 'Administrador.class.php';
    //require 'message.php';

    $id = $_GET['id'];
    
    $status = $_GET['status'];
    // echo $id."<br>";
    // echo $status;
   
    //print_r($dados);
    $a = new Administrador();
    if($a->MudarStatus($id,$status)== true){
        header("location: GestaoAdministrador.php");

    }else{
       header('Location: CadastroAdmin.html');
    }
?>