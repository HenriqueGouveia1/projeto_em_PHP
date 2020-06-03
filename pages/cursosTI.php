<?php include "conecta.inc.php";?>
<head>
  <title>Cursos GRÁTIS Pra você!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/novocss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <div class="row"><center>
    <div class="flex-column">
      <h2 id="cursoudemy">Cursos udemy:</h2>
      <p>Unity: <a style="color:blue;font-size:18px;width: 205px;" href="url">https://www.udemy.com/course/aprenda-unity-curso-gratuito/</a></p> <br>
      <p>Shell Script: <a style="color:blue;font-size:18px;width: 205px;" href="url">https://www.udemy.com/course/conceitos-de-programacao-em-shell-script//</a></p> <br>
      <p>Unity: <a style="color:blue;font-size:18px;width: 205px;" href="url">https://www.udemy.com/course/crie-um-jogo-simples-na-unity-2019-curso-gratuito//</a></p> <br>
      <p>Expressões regulares com Python 3: <a style="color:blue;font-size:18px;width: 205px;" href="url">https://www.udemy.com/course/expressoes-regulares-com-python-3-curso-gratuito/</a></p> <br>
     
      <h2 id="laureate">Laureate_Digital</h2>
      <p>Várias áreas: <a style="color:blue;font-size:18px;width: 205px;" href="url">https://laureatebrasil.blackboard.com/bbcswebdav/institution/Laureate_Digital
        /general_contents/templates_html/cursos_livres_degustacao/b2b.html</a></p> <br>
        <h2 id="outros">OUTROS</h2>
        <?php while($dados=mysqli_fetch_array($consulta)) {?>
          <p><?php  echo $dados["nome"];?></p>
          <a><?php echo $dados["link"];?></a>
      
        <?php }?>
    </div>
    </center>
    </div>
    </div> 
  </div>

</body>
</html>
