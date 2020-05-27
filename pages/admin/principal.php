<?php include ("config.inc.php"); include("verifica_login.php")?>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <header class=page-header>
    <center>
        <h1>
        PAINEL ADMINISTRATIVO
        </h1>
    </center>
  </header> 
  
<style>
body{
  background-image: url(https://static.coindesk.com/wp-content/uploads/2017/08/Server-room.jpg) ;
}
  h1{
      background-color: lightgray;
  }
  a{
    font-family: sans-serif;
  }
nav{
  width: 200px;
  height: auto; /* only for demonstration, should be removed */
  padding: 20px;
  font-style: bold;
  background-color: lightgray;
}
nav a{
  background-color: transparent;
  opacity: inherit;
  color: #000;
  font-weight: bold;
}
</style>

<body>
 <div class="row"> 
            <div class="menu">
              <nav>
                 <ul class="nav flex-column">
                 <center>
                    <li><a href="?pg=principal">Home</a></li>
                    <li class="active"><a href="?pg=inserir">Inserir Novo Curso</a></li>
                    <li class="active"><a href="?pg=listar">Listar Contatos</a></li>
                    <li class="active"><a href="?pg=logout">SAIR</a></li>
                  </center>
                </ul>
                </nav>
            </div>
        </div>
</body>
	
<div class='container'>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	      
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>