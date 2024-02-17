<!DOCTYPE html>
<html>
<head>
  <title>Meu Site3</title>
  <?php   
    require_once 'head.php';
  ?>
</head>
<body>
  <header>
    <h1>E & A Souza Advogados Associados</h1>
  </header>
  <nav>
    <ul>
      <li><a href="index.php">Quem somos</a></li>
      <li><a href="servicos.php">Serviços</a></li>
      <li><a href="contato.php">Contato</a></li>
    </ul>
  </nav>
  <section>
    <div class="principal-title"><h2><a href="whatsapp.php">Bem-vindo(a), converse com um Advogado agora:</a></h2></div>
<div class="card-container-master">
  <div class="card-container"><h2>Descubra Nossos Serviços</h2></div>
  <div class="card-container">
    <p>Nosso escritório atua nas seguintes áreas:</p>
    <ul class="card-servicos">
      <li><a href="regularizacao.php">Regularização de imóveis</a></li><br>
      <li><a href="trabalhador.php">Direito do Trabalhador</a></li><br>
      <li><a href="extrajudicial.php">Assessoria Extrajudicial</a></li><br>
      <li><a href="concursos.php">Concursos Públicos</a></li>
    </ul>
  </div>
  <div class="card-container"><p>Explore cada serviço em detalhes, incluindo benefícios e vantagens competitivas.</p></div>
  <div class="card-container"><p>Veja exemplos de casos anteriores que demonstram nossa capacidade em fornecer soluções jurídicas eficazes e inovadoras.</p></div>
</div>

  </section>
  
 <span class="card-span-container">
    <div class="element-1" onclick="window.location.href='index.php';">
    </div>
    <div class="element-2" onclick="window.location.href='contato.php';">
    </div>
    <div class="element-3" onclick="window.location.href='servicos.php';">
    </div>
    <div class="element-4" onclick="window.location.href='#';">
    </div>
    <div class="element-5" onclick="window.location.href='#';">
    </div>
  </span>
<script src="script.js"></script>
</body>
<footer>
     <?php  
        require_once 'footer.php'; 
      ?>
  </footer>
</html>
