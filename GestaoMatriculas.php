<?php
   //include_once "Conexao.php";
   require 'conexao.php';
   require 'Matricula.class.php';
   
  // print_r($_GET);
  // exit();
  
  $filtro=$_GET['buscar'];
  if(!empty($filtro))
    $filtro="WHERE Nome LIKE '%$filtro%' OR Email LIKE '%$filtro%'";

  // echo $filtro."<br><br>";
  
   $pagina =filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);
   // printf($pagina);
   // echo"aqui";
   // die();
  // if(!empty($pagina)){
   $pagina=1;
       //calcular o inicio da visualização do pagina
       $qnt_result_pg = 10; //Quantidade de registro porpagina
       $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

       

      $query_Matricula ="SELECT IdMatriculas, Nome, Email, Telefone, Plano, Modalidade, Valor, Status  FROM matriculas $filtro ORDER BY IdMatriculas DESC LIMIT $inicio,$qnt_result_pg";
    //  echo $query_Matricula;
    // exit();

       $result_Matricula = $pdo->prepare($query_Matricula); 
       $result_Matricula->execute();

       $dados ="<div class='table-responsive'>
                   <table class='table table-striped'>
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nome</th>
                                   <th>E-mail</th>
                                   <th>Telefone</th>
                                   <th>Plano</th>
                                   <th>Modalidade</th>
                                   <th>Valor</th>
                                   <th>Status</th>
                                   <th>Ações</th>
                               </tr>
                           </thead> 
                           <tbody>";
               
       while ($row_Matricula = $result_Matricula->fetch(\PDO::FETCH_ASSOC)){
           extract($row_Matricula);
           // print_r($row_Matricula);
           // exit();
           $dados .="<tr>
                           <td>$IdMatriculas</td>
                           <td>$Nome</td>
                           <td>$Email</td>
                           <td>$Telefone</td>
                           <td>$Plano</td>
                           <td>$Modalidade</td>
                           <td>$Valor</td>
                           <td>$Status</td> 
                           <td colspan='3'><a href='MudarStatusMatricula.php?id=$IdMatriculas&status=$Status' onclick='funcao1($Nome)' class='btn-floating blue' onclick='funcao1($Nome)'><i class='material-icons'>check</i></a> 
                                           <a href='editarcadastro.php?id=$IdMatriculas' class='btn-floating orange'><i class='material-icons'>edit</i></a>
                                           <a href='DeletarMatricula.php?id=$IdMatriculas' class='btn-floating red modal-trigger'><i class='material-icons'>delete</i></a>  
                   </tr>";
       }
       
       $dados .="<tr><td colspan='7'></td><td><a href='editarcadastro.php' class='btn-floating red modal-trigger'><i class='material-icons'>add</i></a></td></tr>
       </tbody>
               </table>
           </div>";
      
       $query_pg = "SELECT COUNT(IdMatriculas) as num_result FROM matriculas";
       $result_pg = $pdo->prepare($query_pg); 
       $result_pg->execute();
       $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);
      
     //  echo "--------------------------------------------/ ".$row_pg ." \------------------------------";
       //Quantidade de pagina 
       $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
      
       $max_links = 2;

      // $dados .='<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-center">';
       
       //$dados .="<li class='page-item'><a href='#' class='page-link' onclick='listaradministradores(1)'>Primeira</a></li>";

       for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
           if($pag_ant >= 1){
               $dados .="<li class='page-item'><a href='#' class='page-link' onclick='listaradministradores($pag_ant)'>$pag_ant</a></li>";
           }
       }
       
      //  $dados .="<li class='page-item active'><a class='page-link' href='#'>$pagina</a></li>";

       for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
           if($pag_dep <= $quantidade_pg){
               $dados .="<li class='page-item'><a href='#' class='page-link' onclick='listaradministradores($pag_dep)'>$pag_dep</a></li>";
           }
       }
       
      // $dados .="<li class='page-item'><a class='page-link' href='#' onclick='listaradministradores($quantidade_pg)'>Ultima</a></li>";
       $dados .='</ul></nav>';
      
       $conteudo = $dados;
       //echo $dados; 
   //}else{
       //$conteudo ="<div class='alert alert-danger' role='alert'>Erro: Nenhum Matricula encontrado!</div>";
      

      
       
       
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Society</title>
    

    <link rel="stylesheet" href="teste02.css"/>
  
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
</head>
<body>
    
<header class="topnav" id="myTopnav">
   
   <div class="navlist" id="navlist">
       <a class="cursor0" href="#home">&nbsp</a>
       <a class="navoption active"   onclick="redirectToForm('index.php')"  href="#home">Inicio  </a>
       <a class="navoption"  onclick="redirectToForm('quemsomos.html')" href="#news">Quem somos</a>
       <a class="navoption"   onclick="redirectToForm('invista.html')" href="#contact">Invista</a>
       <a class="navoption"   onclick="redirectToForm('ADM.php')" href="#contact">Administrador</a>
       <a class="navoption" href="#about"> </a>
       <a class="navoption" href="#about"> </a>
       <a href="javascript:void(0);" class="icon" id="hamburger">
           <i class="fa fa-bars"></i>
       </a>
   </div>
</header>

 


<center>
    
<form action="GestaoMatriculas.php">
                        <label>Buscar</label>
                        <input type="text" name="buscar"><br><br>
                       <button type="submit" id="btnbuscar">Buscar</button>
                    </form>
                    <?php echo $conteudo; ?>




                    <script>
                function funcao1(Nome)
                {
                    var nome = Nome;
                    var x;
                    var r=confirm("Desja mudar o status do aluno(a) nome !");
                    if (r==true)
                    {
                      alert("você pressionou OK!")  
                      x="você pressionou OK!";
                    }
                    else
                    {
                      alert("Você pressionou Cancelar!")  
                      x="Você pressionou Cancelar!";
                    }
                    // document.getElementById("demo").innerHTML=x;
                }
                
            </script>





                    <script>
        function redirectToForm(page) {
            window.location.href = page;
        }
    </script>

</center>





</body>
</html>