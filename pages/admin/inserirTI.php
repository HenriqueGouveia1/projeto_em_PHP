<?php include "config.inc.php"; ?>
<style>
td{
    background-color: lightgray; 
}
</style>

<form action="?pg=inserirdbTI" method="post"><center>
<table>

    <tr> 
        <td>Nome do curso: </td>
        <td><input name="nome" type="text"/></td>
    </tr>
    <tr> 
        <td>Link/URL: </td>
        <td><input name="link" type="text"/></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
    
</table></center> 