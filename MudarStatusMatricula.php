<?php
    require 'conexao.php';
    require 'Matricula.class.php';
   
    //require 'message.php';

    $id = $_GET['id'];
    
    $status = $_GET['status'];
    // echo $id."<br>";
    // echo $status;
   
    //print_r($dados);
    $a = new Matriculas();
    if($a->MudarStatus($id,$status)== true){
        header("location: GestaoMatriculas.php");

    }else{
       header('Location:GestaoMatriculas.php');
    }
?>