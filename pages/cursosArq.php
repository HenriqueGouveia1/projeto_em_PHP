<!DOCTYPE html>
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
  <div class="flex-column" >
          <br>
          <h2 id="cursoudemy">Cursos udemy:</h2>
          <p >Desenhista / AutoCAD: <a style="color:blue;font-size:18px; href="url">https://www.udemy.com/course/desenhista-para-topografia-nivel-1-autocad//</a></p> <br>
          <p>AutoCAD 2019 - Curso Básico: <a style="color:blue;font-size:18px; href="url">https://www.udemy.com/course/autocad-2019-curso-basico-completo/</a></p> <br>
          <p>SketchUp para Interiores - Websérie Gratuita: <a  style="color:blue;font-size:18px;"width: 205px; href="url">https://www.udemy.com/course/sketchup-para-interiores/ </a></p>
         
          <h2 id="outros">OUTROS</h2>
        <?php while($dados=mysqli_fetch_array($consultaarq)) {?>
          <p><?php  echo $dados["nome"];?></p>
          <a><?php echo $dados["link"];?></a>
          <?php }?>
          <br> <br> <br> <br> <br>
        </div>
    </div>
    </center>
      
    </div>  
  </div>
  
  

</body>
</html>