<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/novocss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Contato</title>
</head>
<style>
h2{
	color: BLACK;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
		
          <h2><center>Obrigado pelo contato!</h2> 
        </div>
        <div class="col-md-6 col-serv">
		<?php
			
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];

			$dados = "INSERT INTO faleconosco (nome, email,telefone,assunto,mensagem) VALUES
			 ('$nome','$email','$telefone','$assunto','$mensagem')";
			
			$query = mysqli_query($conexao,$dados);

			if($query){
				
		    }else{
				echo "<center><h4>Não foi possível enviar o e-mail. 
				<a href=index.php?pg=faleconosco>Tente novamente.</a></h4></center>";
		    }
		?>
		
		 
		</div>
		
	  </div>
	</div>
</div>