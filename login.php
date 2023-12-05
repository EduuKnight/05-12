<?php
    session_start();
    require 'conexao.php';
    require 'Administrador.class.php';
    //require 'Responsavel.class.php';

    // print_r($_POST);
    // exit();

    if(isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['senha'])&&!empty($_POST['senha'])){
            
        
            // $a = new Administrador();
            $a = new Administrador();

            
            $email = $_POST['email'];
            $senha = $_POST['senha'];

           
          if($a->login($email, $senha)== true){
            header("location: GestaoAdministrador.php");
                    // if(isset($_SESSION['IdResponsavel'])){
                    //     header("location: home.php");
                        
                    // }else{
                    //     echo "Chegou aqui !!!!!!!!!!!!!!!!";
                    //     exit();
                    //     header("location: login.html");
                    // }
                }else{
                header("location: login.html");
                //echo"testando codigo";
                }

    } else{
        header("location: ADM.php");
    }
    // INSERT INTO `ssi`.`administrador` (`Nome`, `Email`, `Senha`, `Telefone`, `Status`) VALUES ('felipy', 'felipy@.com', '112233', '59645654', 'Ativo');
?>





