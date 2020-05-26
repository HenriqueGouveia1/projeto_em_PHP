<?php include "../conecta.inc.php";?>
<?php include "config.inc.php";?>
<?php

$busca = "SELECT  * from faleconosco order by id";

$dados = mysqli_query($conexao, $busca);
?>

<table>
    <tr style="background-color:lightgray;">
        <td style="width: 25px;">Id |</td>
        <td style="width: 205px;">Nome |</td>
        <td style="width: 205px;">Email |</td>
        <td style="width: 205px;">Telefone |</td>
        <td style="width: 205px;">Assunto |</td>
        <td style="width: 205px;">Mensagem</td>

    </tr>
    <?php while ($dados = mysqli_fetch_array($conexao,$dados,)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['email'];?></td>
        <td><?=$dados['telefone'];?></td>
        <td><?=$dados['assunto'];?></td>
        <td><?=$dados['mensagem'];?></td>
    </tr>
    
    <?php } ?>


</table>

