<?php
     require 'conexao.php';
     require 'Matricula.class.php';
     
     if(isset($_GET['id'])){
         $id = $_GET['id'];
         $sql = "SELECT * FROM matriculas WHERE IdMatriculas= '$id'";
         $sql = $pdo->prepare($sql); 
         $sql->execute();
         $dados = $sql->fetch(PDO::FETCH_ASSOC);
        
     }
     print_r($dados);
//value="<?php echo $dados['Email'];?>"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Society</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <link rel="stylesheet" href="teste02.css"/>
</head>
<body>

<header class="topnav" id="myTopnav">
   
   <div class="navlist" id="navlist">
       <a class="cursor0" href="#home">&nbsp</a>
       <a class="navoption active"   onclick="redirectToForm('index.php')"  href="#home">Inicio  </a>
       <a class="navoption"  onclick="redirectToForm('quemsomos.html')" href="#news">Quem somos</a>
       <a class="navoption"   onclick="redirectToForm('invista.html')" href="#contact">Invista</a>
       <a class="navoption" href="#about"> </a>
       <a class="navoption" href="#about"> </a>
       <a href="javascript:void(0);" class="icon" id="hamburger">
           <i class="fa fa-bars"></i>
       </a>
   </div>
</header>
    


    <center>
    
    <form action='cadastros.php' method='get' class="form">
      <input type="hidden" name="tipo" value="edmatricula">
        <p class="form-title">Cadastro</p>
         <div class="input-container">
          <label> Nome completo</label>
           <input type="text" name="nome" placeholder="Digite seu nome completo" value="<?php echo $dados['Nome'];?>">
           <span>
           </span>
       </div>
        





       <div class="input-container">
        <label> CPF</label>
        <input type="text" name="cpf" \ placeholder="Digite seu CPF" value="<?php echo $dados['Cpf'];?>"
        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
    title="Digite uma data de nascimento no formato: xx/xx/xxxx"> 
        <span>
        </span>
    </div>
   


    <div class="input-container">
      <label> Data De Nascimento</label>
      <input type="date" name="datanasc" \ placeholder=" Digite sua data de nascimento" value="<?php echo $dados['DataNasc'];?>"
    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
    title="Digite uma data de nascimento no formato: xx/xx/xxxx"> 
      <span>
      </span>
  </div>
  <br>



  <div class="radio-group">
    <label>Sexo</label>
    <br>
    <input class="radio-input" name="sexo" id="radio1" type="radio" value="M"> 
    <label class="radio-label" for="radio1">
      <span class="radio-inner-circle"></span>
      Masculino
    </label>
    
    <input class="radio-input" name="sexo" id="radio2" type="radio" value="F">
    <label class="radio-label" for="radio2">
      <span class="radio-inner-circle"></span>
      Feminino
    </label>
    
    <input class="radio-input" name="sexo" id="radio3" type="radio" value="O">
    <label class="radio-label" for="radio3">
      <span class="radio-inner-circle"></span>
     Outro
    </label>
  </div>







       <div class="input-container">
        <label> Email</label>
        <input type="email" name="email" \ placeholder="Digite seu email" value="<?php echo $dados['Email'];?>"
</div>
		
        <span>
        </span>
    </div>

      



    <div class="input-container">
      <label> Telefone</label>
      <input type="text" name="telefone" \ placeholder="Digite seu telefone" value="<?php echo $dados['Telefone'];?>"
      </div>


  <div class="input-container">
          <label> Plano</label>
           <input type="text" name="plano"  value="<?php echo $dados['Plano'];?>"
           <span>
           </span>
       </div>



       <div class="input-container">
          <label> Valor</label>
           <input type="valor" name="valor" value="<?php echo $dados['Valor'];?>"
           <span>
           </span>
       </div>


       <div class="input-container">
          <label> Modalidade</label>
           <input type="namemodalidade" name="modalidade" value="<?php echo $dados['Modalidade'];?>"
           <span>
           </span>
       </div>




      <button type="submit" class="submit">
         Pagar
       </button>
 
       <p class="signup-link">
         No account?
         <a href="">Sign up</a>
       </p>
    </form>

</center>





















<script>
        function redirectToForm(page) {
            window.location.href = page;
        }
    </script>
 

</body>
</html>