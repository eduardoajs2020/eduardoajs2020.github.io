<!DOCTYPE html>
<html>
<head>
  <?php   
  require_once 'head.php';
  ?>
  <title>Meu Site principal</title>
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
    <div class="principal-title"><h2><a href="https://wa.me/5531993772878">Bem-vindo(a), fale com um Advogado agora:</a></h2></div>
    <div class="card-container-master">
      
    <div class="card-container"><h2>Entre em Contato</h2></div>
    <div class="card-container"><p>Valorizamos o seu interesse em nossa empresa e estamos prontos para ajudá-lo. Se você tiver dúvidas, comentários ou quiser discutir como podemos colaborar, entre em contato conosco.</p></div>
    <div class="card-container"><p>Preencha o formulário de contato abaixo e responderemos prontamente. Quanto mais detalhes você nos fornecer, melhor poderemos ajudá-lo. Sua privacidade é importante para nós e todas as informações serão tratadas de forma confidencial.</p></div>
    <div class="card-container"><p>Garanta que as informações fornecidas sejam detalhadas para entendermos suas necessidades específicas.</p></div>
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

  <div class="card-container-master">
  
  <div class="form-container">

    <h2>Formulário de Contato</h2>

    <form action=""  method="POST">
      <div>
          <input type="number" name="id" placeholder="Número:" hidden><br><br>
      </div>
      <div>
          <label>Nome:</label>
          <input type="text" name="nome" placeholder="Nome:"><br><br>
      </div>
      <div>
          <label>Sobrenome:</label>
          <input type="text" name="sobrenome" placeholder="Sobrenome:"><br><br>
      </div>
       <div>
          <label>Email:</label>
          <input type="email" name="email" placeholder="Email:"><br><br>
       </div>
        <div>
           <label>Sua mensagem:</label>
           <textarea type="text" name="msg" rows="6" cols="23"></textarea><br><br>
      </div>
      <div>
          <input class="buttom" name="Enviar" type="submit" value="Enviar">
      </div>
  </form>
  </div>

 <div class="text-contact-container">

  <h3>Entre em Contato Conosco</h3>
  <p>Sua satisfação é nossa prioridade e estamos aqui para ajudá-lo em cada passo do caminho.</p>

  <h3>E-mail:</h3>
  <p>Envie-nos um e-mail para compartilhar documentos ou informações adicionais. Nossa equipe de suporte está pronta para fornecer assistência personalizada e responder prontamente.</p>
  
  <h3>Redes Sociais:</h3>
  <p>Conecte-se conosco em nossas páginas oficiais no Facebook, Twitter e LinkedIn. Fique atualizado sobre as últimas novidades, eventos e recursos relacionados ao nosso escritório.</p>

  <h3>Formulário de Contato:</h3>
  <p>Preencha nosso formulário de contato e entraremos em contato rapidamente. Quanto mais detalhes você nos fornecer, melhor poderemos ajudá-lo. Sua privacidade é fundamental e todas as informações serão tratadas com total confidencialidade.</p>

  <ul>
    <li><strong>Estamos aqui para você a qualquer momento.</strong></li>
    <li><strong>Esperamos ansiosamente seu contato e a oportunidade de trabalhar juntos para alcançar seus objetivos.</strong></li>
  </ul>
</div>

</div>
<script src="script.js"></script>
</body>
<footer>
    <?php  
      require_once 'footer.php'; 
    ?>
  </footer>
</html>
