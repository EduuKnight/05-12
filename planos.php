<?php
   
    $modalidade = $_GET['modalidade'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plano.css"/>
    
    
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
      <div class="pack-container">
        <div class="header">
          <p class="title">
          Single
          </p>
          <div class="price-container">
            <span>R$</span>49,99
            <span>   </span>
          </div>
        </div>
        <div>
          <ul class="lists">
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Treine até 5x por semana
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
               Sem taxa de matrícula
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Acompanhante gratuito 5x/mês
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Fidelização de 12 meses
              </p>
            </li>
          </ul>
    
            
        </div>
        <div class="button-container">
          <button type="button" onclick="redirectToForm('cadastro.php?plano= Single&valor=49.99&modalidade=<?php echo $modalidade ?>'  )">Assinar agora<span>&rarr;</span></button>
           
        </div>
      </div>
      <div class="pack-container2">
        <div class="header">
          <p class="title">
          Premium
          </p>
          <div class="price-container">
            <span>R$</span>99,99
            <span>   </span>
          </div>
        </div>
        <div>
          <ul class="lists">
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
              Sem taxa de matrícula
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
               Acompanhamento gratuito 7/mês
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
              
               Sem restrição de dias
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
              Fidelização de 12 meses
              </p>
            </li>
          </ul>
        </div>
        <div class="button-container">
          <button type="button" onclick="redirectToForm('cadastro.php?plano=Premium&valor=99.99&modalidade=<?php echo $modalidade ?>')">Assinar agora<span>&rarr;</span></button>
        </div>
      </div>
      <div class="pack-container">
        <div class="header">
          <p class="title">
            Easy
          </p>
          <div class="price-container">
            <span>R$</span>69,99
            <span>    </span>
          </div>
        </div>
        <div>
          <ul class="lists">
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Treine 5x por semana
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Sem taxa de matrícula
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Acompanhante gratuito 3x/mês
              </p>
            </li>
            <li class="list">
              <span>
                <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
              </span>
              <p>
                Sem fidelização de 12 meses
              </p>
            </li>
          </ul>
        </div>
        <div class="button-container">
          <button type="button" onclick="redirectToForm('cadastro.php?plano=Easy&valor=69.99&modalidade=<?php echo $modalidade ?>')">Assinar agora<span>&rarr;</span></button>
          
        </div>
      </div>
</center>




    




 <script>
  function redirectToForm(page) {
      window.location.href = page;
  }
</script>









</body>
</html>