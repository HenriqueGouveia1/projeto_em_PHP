<?php
<div class="container">
<div class="row">
  <div class="col-md-12">
	<div class="panel">
	  <div class="panel-heading">
		<h3>Obrigado pelo contato.</h3> 
	  </div>
	  <div class="col-md-6 col-serv">
	  <?php
		  
		  $nome = $_POST['nome'];
		  $email = $_POST['email'];
		  $telefone = $_POST['telefone'];
		  $assunto = $_POST['assunto'];
		  $Mensagem = $_POST['Mensagem'];

		  $dados = "INSERT INTO faleconosco (nome, email,telefone,assunto,Mensagem) VALUES ('$nome','$email','$telefone','$assunto','$Mensagem')";
		  
		  $query = mysqli_query($conexao,$dados);

		  if($query){
			  echo "<h4>Dados enviados com sucessso!</h4></center>";
		  }else{
			  echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=faleconosco>Tente novamente.</a></h4></center>";
		  }
	  ?>
	  </div>
	</div>
  </div>
</div>
?>