<?php

$conexao = mysqli_connect("localhost","root","");

$db= mysqli_select_db($conexao,"meusite");

$insert = mysqli_query($conexao, "SELECT * FROM cursosti");
?>