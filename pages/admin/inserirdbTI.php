<style>
h3{
    background-color: lightgray;
}

a{
    background-color: lightgray;
}
</style>

<?php include "config.inc.php"; ?>
<?php

$nome = $_POST['nome'];
$link = $_POST['link'];

$sql = "INSERT INTO cursoti VALUES 
('$nome', '$link')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if($insert){
    echo "<center><h3>Página cadastrada com sucesso!</h3><br>";
    echo "<a href='?pg=inserir'>Cadastrar Novamente</a><br>";
    echo "<a href='?pg=listar'>Listar contatos</a>";
}else{
  echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserirTI'>Tente Novamente</a>";
}
?>