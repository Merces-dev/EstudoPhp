<?php


$sorteio = rand(0, 5);
$padrao = "Seu valor é ";
$message = "";


switch ($sorteio) {
    case 0:
        $message .= $padrao . $sorteio;
        break;
    case 1:
        $message .= $padrao . $sorteio;
        break;
    case 2:
        $message .= $padrao . $sorteio;
        break;
    default:
        $message .= $padrao . $sorteio;
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $message
    ?>
</body>

</html>