<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Consulta CEP</title>

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
            width: 300px;   
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 15px;
            border: 1px solid #aaa;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #0053b3;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #003f87;
        }
    </style>

</head>

<body>

    <div class="container">
        <h2>Consulta de CEP</h2>

        <form action="buscaCep.php" method="post">
            <label>CEP:</label>
            <input type="text" name="txtCEP" placeholder="Ex.: 14000000" required>

            <button type="submit">Buscar</button>
        </form>
    </div>

</body>
</html>
