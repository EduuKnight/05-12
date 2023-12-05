<?php
     //session_start();
     require 'conexao.php';
 
     //print_r();
     //print_r($pdo);
     // echo"============================================================= <br>";
     // var_dump(key($pdo));
     // echo"<br>=============================================================<br>";
     //date('d/m/Y H:i'); --- Data e hora atual;
     class Matriculas{
        
        
           //===================================
        public function salvar($dados){
            global $pdo;
            // echo"<br><br>";
            // print_r($dados);
            // echo"<br><br>";
            $nome = $dados['nome'];
            $CPF = $dados['cpf'];
            $datanasc = $dados['datanasc'];
            $sexo = $dados['sexo'];
            $email = $dados['email'];
            $telefone = $dados['telefone'];
            $plano = $dados['plano']; 
            $valor = $dados['valor'];
            $modalidade = $dados['modalidade'];
            //$status = $dados['status'];
                  
        
        
            $sql = "INSERT INTO `ssi`.`Matriculas` (`Nome`, `Cpf`, `DataNasc`, `Sexo`,`Email`,`Telefone`, `Plano`, `Valor`, `Modalidade`) VALUES ('$nome','$CPF','$datanasc','$sexo','$email','$telefone','$plano','$valor','$modalidade');";
        //    echo $sql;
        //    exit();
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
            //  echo"<br>*************************<br>";
            // print_r($dados);
            // echo"<br>*************************<br>";
            $id = $dados['id'];
            $nome = $dados['nome'];
            $senha = $dados['senha'];
            $CPF = $dados['CPF'];
            $telefone = $dados['telefone'];
            $email = $dados['email'];
           
            $sql = "UPDATE `ssi`.`Matriculas` SET `Nome` = '$nome',`Senha` = '$senha',`CPF` = '$CPF', `Telefone` ='$telefone',  `Email` = '$email',  WHERE (`IdAdministrador` = '$id');";
                    
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
           
            $sql = "DELETE FROM `ssi`.`Matriculas` WHERE  `IdMatriculas`='$id';";
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
        // if($status=='Aguardando')
        //     $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Ativo' WHERE  `IdMatriculas`=$id;";
        // elseif($status=='Ativo')
        //       $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Pausado' WHERE  `IdMatriculas`=$id;";
        //    elseif($status=='Pausado')
        //         $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Suspenso' WHERE  `IdMatriculas`=$id;";
        //         elseif($status=='Suspenso')
        //             $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Suspenso' WHERE  `IdMatriculas`=$id;";
        switch($status){
            case 'Aguardando':
                $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Ativo' WHERE  `IdMatriculas`=$id;";
                break;
            case 'Ativo':
                $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Pausado' WHERE  `IdMatriculas`=$id;";
                    break;
            case 'Pausado':
                $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Suspenso' WHERE  `IdMatriculas`=$id;";
                        break;
            case 'Suspenso':
                $sql = "UPDATE `ssi`.`Matriculas` SET `Status`='Ativo' WHERE  `IdMatriculas`=$id;";
                    break;
        }
        //  echo $sql;
        //  exit();
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
