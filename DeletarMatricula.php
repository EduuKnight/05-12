<?php
    require 'conexao.php';
    require 'Matricula.class.php';
    //require 'message.php';

    $id = $_GET['id'];
    //print_r($dados);
    //echo"=============================".$id."=============================";
    //exit(); 
    $a = new Matriculas();
    if($a->delete($id)== true){
       // $_SESSION['mensagem'] = "Cadastrado com sucesso!";
		//header('Location: ../index.php');
        header("location: GestaoMatriculas.php");

    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: CadastroAdmin.html');
    }
?>