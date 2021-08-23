<?php
$mensagem = '';
if ($_POST) {
    $autonomia = $_POST['autonomia'];
    $distancia = $_POST['distancia'];
    $combustiveis = array("Gasolina", "Diesel", "Álcool");
    if (is_numeric($distancia) && is_numeric($autonomia)) {
        if ($distancia > 0 && $autonomia > 0) {
            $mensagem .= "<div class='sucesso'>";
            $mensagem .= "O valor total gasto será de:";
            $mensagem .= "<ul>";
            // O valor é calculado e arrendondado até a 2° casa decimal
            for ($i = 0; $i <= count($combustiveis) - 1; $i++) {
                // Se o combustivel for gasolina o preco sera de R$ 6.80

                if ($combustiveis[$i] == $combustiveis[0]) {
                    $preco = 6.80;
                } elseif ($combustiveis[$i] == $combustiveis[1]) {
                    $preco = 4.80;
                } elseif ($combustiveis[$i] == $combustiveis[2]) {
                    $preco = 5.40;
                }
                $valor = number_format(($distancia / $autonomia) * $preco, 2, ',', '.');
                $mensagem .= "<li>". $combustiveis[$i] . " : <b>R$ " . $valor . "</b></li>";
            }
            $mensagem .= "<li> O valor da distância é: " . $distancia . "KM.</li>";
            $mensagem .= "<li> O valor da autonomia é: " . $autonomia . "KM/L.</li>";
            $mensagem.= "</ul>";
			$mensagem.= "</div>";
        } else {
            $mensagem.= "<div class='erro'>";
            $mensagem .= "<p>Os valores enviados devem ser maiores que zero.</p>";
            $mensagem.= "</div>";

        }
    } else {
        $mensagem.= "<div class='erro'>";
        $mensagem .= "<p>Os valores enviados ao formulário não são numéricos.</p>";
        $mensagem.= "</div>";

    }
} else {
    $mensagem.= "<div class='erro'>";
    $mensagem .= "<p>Nenhum dado foi recebido pelo formulário.</p>";
    $mensagem.= "</div>";

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>

</html>