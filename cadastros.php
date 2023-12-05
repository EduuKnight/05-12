<?php
     session_start();
     require 'conexao.php';
     require 'Administrador.class.php';
     require 'Matricula.class.php';

   
   
    // // print_r($_GET);
    $tipo = $_GET['tipo'];
    // // echo "<br>".$tipo."<br>";

    switch ($tipo) {
        case "adm":
            $dados = $_GET;
            //print_r($dados);
            $a = new Administrador();
            if($a->salvar($dados)== true){
                header("location: GestaoAdministrador.php");
            }else{
                header('Location: cadadm.html');
            }
        break;
        case "matricula":
            $dados = $_GET;
            print_r($dados);
            $m = new Matriculas();
            if($m->salvar($dados)== true){
                header("location: GestaoMatriculas.php");
            }else{
                header('Location: index.php');
            }
        break;
        case "edmatricula":
            $dados = $_GET;
            print_r($dados);
            $m = new Matriculas();
            if($m->update($dados)== true){
                header("location: GestaoMatriculas.php");
            }else{
                header('Location: index.php');
            }
        break;
        case "responsavel":
            $dados = $_GET;
            //print_r($dados);
            $a = new Responsavel();
            if($a->salvar($dados)== true){
                header("location: GestaoResponsavel.php");
            }else{
                header('Location: cadresp1.html');
            }
        break;
        case "edtadm":
            // $dados = $_GET;
            // print_r($dados);
            // exit();
            $dados = $_GET;
            $a = new Administrador();
           
            if($a->update($dados)== true){
                header("location: GestaoAdministrador.php");
            }else{
                header('Location: cadadm.html');
            }
        break;
    }

    exit();
?>