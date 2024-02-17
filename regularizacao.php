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
    <div class="principal-title"><h2><a href="whatsapp.php">Bem-vindo(a), fale com um Advogado agora:</a></h2></div>
    <div class="card-container-master">
    <div class="card-container"><h2>Bem-vindo ao nosso Site! </h2></div>
    <div class="card-container"><p>- Lista dos principais serviços oferecidos pela startup</p></div>
    <div class="card-container"><p>- Descrição detalhada de cada serviço, incluindo benefícios e vantagens competitivas</p></div>
    <div class="card-container"><p>- Exemplos de projetos anteriores que demonstrem a capacidade da startup em entregar soluções de software eficientes e inovadoras</p> </div>
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
