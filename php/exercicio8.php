<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//Instanciando
    ?>

    <h1>Exercício 08</h1>
    <form method="POST">
        <label>Insira a base</label>
        <input type="number" id="base" name="base"><br><br>

        <label>Insira a altura</label>
        <input type="number" id="altura" name="altura"><br><br>

        <button>Calcular
        <?php
           
            $base = $_POST['base'];
            $altura = $_POST['altura'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($base == "" || $altura == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "A área do retângulo é: ".areaRetangulo($base,$altura);
                }
            ?>
        </textArea>

    </form>
</body>
</html>