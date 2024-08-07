<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $idade = "";//Instanciando
    ?>

    <h1>Exercício 14</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="number" id="celsius" name="celsius"><br><br>

        <button>Calcular
        <?php
           
            $celsius = $_POST['celsius'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($celsius == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "Temperatura em Fahrenheit: ".celsiusParaFahrenheit($celsius);
                }
            ?>
        </textArea>

    </form>
</body>
</html>