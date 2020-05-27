<?php

$conexao = mysqli_connect("localhost","root","");

$db= mysqli_select_db($conexao,"meusite");

$query = mysqli_query($conexao, "SELECT * FROM faleconosco");

$consulta =mysqli_query($conexao, "SELECT * FROM cursosTI");
$consultaarq =mysqli_query($conexao, "SELECT * FROM cursosarq");
$consultades =mysqli_query($conexao, "SELECT * FROM cursosdes");
?>