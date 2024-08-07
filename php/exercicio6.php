<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//Instanciando
    ?>

    <h1>Exercício 06</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="number" id="num1" name="num1"><br><br>

        <button>Calcular
        <?php
           
            $num1 = $_POST['num1'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($num1 == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "A raiz do número informado é: ".raiz($num1);
                }
            ?>
        </textArea>

    </form>
</body>
</html>