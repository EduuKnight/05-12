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
<html lang="en">
<head>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Administrador</title>
    <link rel="stylesheet" href="estilo2.css"/>
    <link rel="stylesheet" href="teste02.css"/>
    <style>
        body {
            background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(160, 132, 254, 1) 100%, rgba(0, 212, 255, 1) 100%);
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #fffefe;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            width: 100%;
            background: #000000;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(246, 48, 48, 0.2);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ffffff;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ffffff;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #7303e3;
            color: white;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #000000;
        }

        button {
            background-color: transparent;
            border: none;
            color: #ffffff;
            cursor: pointer;
            font-size: 16px;
            text-decoration: underline;
            margin-top: 10px;
        }

        button:hover {
            color: #ffc107;
        }
    </style>
</head>
<body>

    <form action="login.php" method="post">
        <h2>Cadastro de Administrador</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <input class="button1" type="submit" value="Entrar">
        
    </form>
    <?php

// Exibe mensagem de erro, se houver
if (isset($error_message)) {
    echo '<p>' . $error_message . '</p>';
}
?>
    



</body>
</html>
