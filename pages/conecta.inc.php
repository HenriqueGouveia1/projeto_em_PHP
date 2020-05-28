<?php

$conexao = mysqli_connect("localhost","root","");

$db= mysqli_select_db($conexao,"meusite");

$query = mysqli_query($conexao, "SELECT * FROM contatenos");

$consulta =mysqli_query($conexao, "SELECT * FROM cursoTI");
$consultaarq =mysqli_query($conexao, "SELECT * FROM cursosarquitetura");
$consultades =mysqli_query($conexao, "SELECT * FROM cursosdesign");
?>