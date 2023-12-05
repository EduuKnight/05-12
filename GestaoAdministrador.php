<?php
   //include_once "Conexao.php";
   require 'conexao.php';
   require 'Administrador.class.php';
   
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
       $qnt_result_pg = 5; //Quantidade de registro porpagina
       $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

       

      $query_Administrador ="SELECT IdAdministrador, Nome, Email, Telefone, DataCadastro, Status  FROM administrador $filtro ORDER BY IdAdministrador DESC LIMIT $inicio,$qnt_result_pg";
     
       $result_Administrador = $pdo->prepare($query_Administrador); 
       $result_Administrador->execute();

      

      
       $dados ="<div class='table-responsive'>
                   <table class='table table-striped'>
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nome</th>
                                   <th>E-mail</th>
                                   <th>Cel</th>
                                   <th>Cadastrado</th>
                                   <th>Status</th>
                                   <th>Ações</th>
                               </tr>
                           </thead> 
                           <tbody>";
               
       while ($row_Administrador = $result_Administrador->fetch(\PDO::FETCH_ASSOC)){
           extract($row_Administrador);
           // print_r($row_Administrador);
           // exit();
           $dados .="<tr>
                           <td>$IdAdministrador</td>
                           <td>$Nome</td>
                           <td>$Email</td>
                           <td>$Telefone</td>
                           <td>$DataCadastro</td>
                           <td>$Status</td> 
                           <td colspan='3'><a href='MudarStatus.php?id=$IdAdministrador&status=$Status' onclick='funcao1($Nome)' class='btn-floating blue' onclick='funcao1($Nome)'><i class='material-icons'>check</i></a> 
                                           <a href='editaradm.php?id=$IdAdministrador' class='btn-floating orange'><i class='material-icons'>edit</i></a>
                                           <a href='DeletarAdm.php?id=$IdAdministrador' class='btn-floating red modal-trigger'><i class='material-icons'>delete</i></a>  
                   </tr>";
       }
       
       $dados .="<tr><td colspan='7'></td><td><a href='CadastroAdm.html' class='btn-floating red modal-trigger'><i class='material-icons'>add</i></a></td></tr>
       </tbody>
               </table>
           </div>";
      
       $query_pg = "SELECT COUNT(IdAdministrador) as num_result FROM administrador";
       $result_pg = $pdo->prepare($query_pg); 
       $result_pg->execute();
       $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);
      
       //echo "--------------------------------------------/ ".$row_pg ." \------------------------------";
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
       //$conteudo ="<div class='alert alert-danger' role='alert'>Erro: Nenhum Administrador encontrado!</div>";
      

      
       
       
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
 

   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
</head>
<body>
  

    <figure>
      <!-- <img id="logocad" src="img/tempsnip.png"> -->
    </figure>
    <h2>Administrador</h2>
    <div id="principalhome">
            <!-- <?php include('cabecalho.html') ?>
             -->
                <!-- <h2>Administradores</h2> -->
                <!-- <p>Nossa alegria é lhes servir!!!</p> -->
            <div class="conteudoHome">
                    <form action="GestaoAdministrador.php">
                        <label>Buscar</label>
                        <input type="text" name="buscar"><br><br>
                       <button type="submit" id="btnbuscar">Buscar</button>
                    </form>
                    <?php echo $conteudo; ?>
                    <!-- <span class="listar-administradores"></span> -->
                    
            </div>
                
            </div>
            <script>
                function funcao1(Nome)
                {
                    var nome = Nome;
                    var x;
                    var r=confirm("Desja mudar o status do administrador(a) nome !");
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
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script> 
        <script src="js/custom.js"></script>  
  </div>
</body>
</html>
