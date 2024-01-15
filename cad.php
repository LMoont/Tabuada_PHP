<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 1;
    ?>
    <main>
        <h1><?= "Tabuada do $numero" ?></h1>
        
        <?php if(isset($_GET["numero"])): ?>
        <p>
            <fieldset>
        <?php

            echo "<ul>";
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        ?>
        <?php endif;?>
        </p>
            </fieldset>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>

