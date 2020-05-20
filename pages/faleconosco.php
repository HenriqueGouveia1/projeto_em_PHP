<?php
	include_once('topo.php');include_once('menu.php');
	?>
  <?php include "conecta.inc.php"; ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
 
 nav {
  
  width: auto;
  
  background:#ccc;
  padding: 15px;
}
header { 
  background-color: #666;
  padding: 14px;
  text-align: center;
  font-size: 35px;
  color: white;
  opacity: 0.8;
}
</style>
<div class="container">
  <h2>FALE CONOSCO</h2> 
  <form  id="contactForm" action="?pg=contatodb.php" method="post">
     
	 Nome:<input type="text" class="form-control" name="nome" required="" data-validation-required-message=
   "Please enter your name."><br>
	 E-mail: <input type="email" class="form-control" name="email"/><br>
	 Telefone: <input type="tel" class="form-control" name="telefone"/><br>
	 Assunto: <input type="text" class="form-control" name="assunto"/><br>
	 Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <?php
		include_once('rodape.php');
	?>
</div>
</html>