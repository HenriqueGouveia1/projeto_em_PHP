
<html lang="pt">
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
      <p>3 Exercícios de Motion Graphics no Blender 2.8: <a href="url">https://www.udemy.com/course/motion-graphics-exercicios-praticos-no-blender/</a></p> <br>
      <p>Curso de Design Gráfico para Mídias Sociais com o Canva: <a href="url">https://www.udemy.com/course/curso-de-design-grafico-para-midias-sociais-com-o-canva/</a></p> <br>
     
      <h2 id="outros">OUTROS</h2>
        <?php while($dados=mysqli_fetch_array($consultades)) {?>
          <p><?php echo $dados["nome"];?></p>
          <p><?php echo $dados["link"];?></p>
          <?php }?>
  </div>
</div>
</center>

</div>
</body>
</html>