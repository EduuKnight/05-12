<?php
     require 'conexao.php';
     require 'Administrador.class.php';
     
     if(isset($_GET['id'])){
         $id = $_GET['id'];
         $sql = "SELECT * FROM administrador WHERE IdAdministrador = '$id'";
         $sql = $pdo->prepare($sql); 
         $sql->execute();
         $dados = $sql->fetch(PDO::FETCH_ASSOC);
        
     }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Tela de Login</title>
 <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <div class="container">
    <figure>
      <img id="logocad" src="img/tempsnip.png">
    </figure>
    <h2>Cadastro de Administrador</h2>
    <form action="cadastro.php" method="GET">
      <input type="hidden" name="tipo" value="editeadm">
      <input type="hidden" name="id" value="<?php echo $dados['IdAdministrador'];?>">
      <input type="text" name="nome" value="<?php echo $dados['Nome'];?>">
      <input type="email" name="email" value="<?php echo $dados['Email'];?>">
      <input type="password" name="senha" value="<?php echo $dados['Senha'];?>" disabled="">
      <input type="tel" name="telefone" value="<?php echo $dados['Telefone'];?>">
      <input type="text" name="cpf" value="<?php echo $dados['Cpf'];?>">
      <label>Status</a>
        <select name="status" disabled="">
            <option value="<?php echo $dados['Status'];?>"><?php echo $dados['Status'];?></option>
        </select>
      <input type="text" name="data" value="<?php echo $dados['DataCadastro'];?>" disabled=""><br><br>
      <input type="submit" value="Cadastrar">
    </form>
  </div>
</body>
</html>

