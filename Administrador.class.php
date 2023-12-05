<?php
     //session_start();
     require 'conexao.php';
 
     //print_r();
     //print_r($pdo);
     // echo"============================================================= <br>";
     // var_dump(key($pdo));
     // echo"<br>=============================================================<br>";
     //date('d/m/Y H:i'); --- Data e hora atual;
     class Administrador{
        
         public function login($email, $senha){
             global $pdo;
 
            
           $sql = "SELECT * FROM ssi.administrador where email = '$email' AND senha = '$senha' AND status = 'Ativo'";
        //    echo $sql;
        //    exit();
           $sql = $pdo->prepare($sql);
           $sql->execute();
 
 
             if($sql->rowCount() > 0){
                 $dados = $sql->fetch();
                 //  $_SESSION['IdAdministrador'] = $dados['IdAdministrador'];
                 return true;
             }else{
                 return false;
             }
         }

           //===================================
        public function salvar($dados){
            global $pdo;
            // echo"<br><br>";
            // print_r($dados);
            // echo"<br><br>";
            $nome = $dados['nome'];
            $senha = $dados['senha'];
            $telefone = $dados['telefone'];
            $email = $dados['email'];
            // $status = $dados['status'];
                  
        
        
            $sql = "INSERT INTO `ssi`.`administrador` (`Nome`,`Email`,`Senha`,`Telefone`) VALUES ('$nome', '$email', '$senha','$telefone');";
            $sql =$pdo->prepare($sql);
          
            $sql->execute();
        
            if ($sql->rowCount() > 0) {
            return true;
            } else {
            return false;
            }
        }

          //===================================
          public function update($dados){
            global $pdo;
             echo"<br>*************************<br>";
            print_r($dados);
            echo"<br>*************************<br>";
            $id = $dados['id'];
            $nome = $dados['nome'];
            // $senha = $dados['senha'];
            //$CPF = $dados['CPF'];
            $telefone = $dados['telefone'];
            $email = $dados['email'];
           
            $sql = "UPDATE `ssi`.`Administrador` SET `Nome` = '$nome', `Telefone` ='$telefone',  `Email` = '$email'  WHERE (`IdAdministrador` = '$id');";
            //  echo $sql;
            //  die;       
            $sql =$pdo->prepare($sql);
           $sql->execute();
        
            if ($sql->rowCount() > 0) {
            return true;
            } else {
            return false;
            }
        }
         //===================================
         public function delete($id){
            global $pdo;
           
            $sql = "DELETE FROM `ssi`.`administrador` WHERE  `IdAdministrador`='$id';";
            $sql =$pdo->prepare($sql);
            $sql->execute();
        
            if ($sql->rowCount() > 0) {
            return true;
            } else {
            return false;
            }
        }
        //}
     //===================================
     function MudarStatus($id, $status){
        global $pdo;
        
    //    echo $status;
    //    exit();
        //UPDATE `salao`.`Administrador` SET `Status`='Inativo' WHERE  `IdAdministrador`=7;
        if($status=='Inativo')
            $sql = "UPDATE `ssi`.`Administrador` SET `Status`='Ativo' WHERE  `IdAdministrador`=$id;";
        else
            $sql = "UPDATE `ssi`.`Administrador` SET `Status`='Inativo' WHERE  `IdAdministrador`=$id;";
        // echo $sql;
        // exit();
        $sql =$pdo->prepare($sql);
        $sql->execute();
    
        if ($sql->rowCount() > 0) {
            return true;
            } else {
            return false;
            }
    }
    }
?>
