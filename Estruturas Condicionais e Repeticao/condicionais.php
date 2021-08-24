<?php
$mensagem = "";
$idade = 18;

//Operador Condicional
$message = "<ul>";
if( $idade >= 18 ){
    $mensagem .= "<li>É maior de idade</li>";
}
else{
    $mensagem .= "<li>É menor de idade</li>";
}
$message .= "</ul>";



//Operador Ternário
$mensagem .= $idade >= 18 ? "<li>É maior de Idade</li>" : "<li>É menor de Idade</li>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='display:flex; flex-direction:column'>
    <?php
        echo $mensagem;
    ?>
</body>
</html>
