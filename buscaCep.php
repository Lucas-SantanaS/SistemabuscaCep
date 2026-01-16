<?php

function get_endereco($cep)
{
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "https://viacep.com.br/ws/$cep/xml/";
    return @simplexml_load_file($url);
}

$endereco = get_endereco($_POST['txtCEP']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado CEP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.15);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 15px;
            margin: 6px 0;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            background: #0053b3;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        a:hover {
            background: #003f87;
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Resultado da Busca</h2>

    <?php
    if (!$endereco || isset($endereco->erro)) {
        echo "<p><strong>CEP informado é inválido ou não encontrado.</strong></p>";
    } else {
        echo "<p><strong>Rua:</strong> {$endereco->logradouro}</p>";
        echo "<p><strong>Complemento:</strong> {$endereco->complemento}</p>";
        echo "<p><strong>Bairro:</strong> {$endereco->bairro}</p>";
        echo "<p><strong>Cidade:</strong> {$endereco->localidade}</p>";
        echo "<p><strong>Estado:</strong> {$endereco->uf}</p>";
    }
    ?>

    <a href="index.php">Voltar</a>
</div>

</body>
</html>
