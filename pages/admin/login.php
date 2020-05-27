<?php
session_start();
include('conexao.php');
if(empty($_POST['user']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao,$_POST['user']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT user_id, user from user where user = '$user' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user']= $user;
    header('Location: principal.php');
    exit();
}else{
    $_SESSION['nao_autenticado']= true;
    header('Location: index.php');
    exit();
}