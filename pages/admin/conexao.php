<?php

define('HOST', '127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','meusite');

$conexao = mysqli_connect(HOST, USUARIO,SENHA,DB) or die ('não conectou');