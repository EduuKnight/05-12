<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css"/>
    <link rel="stylesheet" href="teste02.css"/>



    
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

  

    <div class="container2">
<img src="logo.PNG" alt="Logo do Site" style="float: left;"> 
</div>




<center>
    <div class="grid">
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem1.jfif">
            <div class="card__content">
              <h1 class="card__header">Futebol</h1>
              <p class="card__text">O <strong>futebol</strong> é um esporte de equipe onde duas equipes competem para marcar gols chutando uma bola para o gol adversário em um campo retangular. É popular, promove habilidades técnicas e táticas, e une pessoas de todo o mundo em torno de sua paixão pelo jogo.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Futebol')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario.html')">Saiba mais<span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem2.jfif">
            <div class="card__content">
              <h1 class="card__header">Karatê</h1>
              <p class="card__text">O <strong>karatê</strong> é uma arte marcial japonesa que se concentra em técnicas de luta com as mãos e os pés. Envolve aprimoramento físico e mental, treinamento rigoroso e é muitas vezes praticado como um esporte de combate ou como uma disciplina de defesa pessoal.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Karate')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario2.html')">Saiba mais <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem3.jfif">
            <div class="card__content">
              <h1 class="card__header">Natação</h1>
              <p class="card__text">A <strong>natação</strong> é um esporte aquático que envolve a propulsão do corpo na água usando movimentos coordenados dos braços e pernas. É uma atividade física popular e uma habilidade valiosa que muitas pessoas aprendem desde tenra idade.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Natação')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario3.html')">Saiba mais <span>&rarr;</span></button>
            </div>
          </div>
        </div>
       
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem4.jfif">
            <div class="card__content">
              <h1 class="card__header">Vôleibol</h1>
              <p class="card__text">O <strong>vôlei</strong> é um esporte de equipe onde duas equipes competem para marcar pontos passando a bola por cima da rede. É popular, requer habilidades de passe, bloqueio e ataque, e é apreciado por pessoas de todas as idades.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Vôlei')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario4.html')">Saiba mais <span>&rarr;</span></button>
            </div>
          </div>
        </div>
       
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem5.jpg">
            <div class="card__content">
              <h1 class="card__header">Atletismo</h1>
              <p class="card__text">O <strong>atletismo</strong> é um conjunto de esportes que envolvem corrida, salto e lançamento. É uma das formas mais antigas de competição esportiva e requer força, velocidade e resistência. Explore os diferentes eventos do atletismo e desafie-se.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Atletismo')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario5.html')">Saiba mais <span>&rarr;</span></button>
            </div>
          </div>
        </div>
      
        <div class="grid__item">
          <div class="card"><img class="card__img" src="imagem6.jpg">
            <div class="card__content">
              <h1 class="card__header">Basquete</h1>
              <p class="card__text">O <strong>basquete</strong> é um esporte de equipe jogado com uma bola e uma cesta. Os jogadores tentam marcar pontos atirando a bola na cesta do adversário. É um esporte emocionante que combina habilidade, estratégia e trabalho em equipe.</p>
              <button class="button1" onclick="redirectToForm('planos.php?modalidade=Basquete')">Matricule-se</button>
              <button class="button2" onclick="redirectToForm('formulario6.html')">Saiba mais <span>&rarr;</span></button>
            </div>
          </div>
        </div>
    </div>

    <script>
        function redirectToForm(page) {
            window.location.href = page;
        }
    </script>
</center>





















</body>
</html>
