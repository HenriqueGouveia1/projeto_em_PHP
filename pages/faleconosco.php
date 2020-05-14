<?php
	include_once('topo.php');include_once('menu.php');
	?>
<div class="container">
  <h2>FALE CONOSCO</h2> 
  <form  id="contactForm" action="?pg=contatodb" method="post">
     
	 <label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name."><br>
	 E-mail: <input type="email" class="form-control" name="email"/><br>
	 Telefone: <input type="tel" class="form-control" name="telefone"/><br>
	 Assunto: <input type="text" class="form-control" name="assunto"/><br>
	 Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>