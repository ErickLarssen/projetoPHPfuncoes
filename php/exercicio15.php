<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $idade = "";//Instanciando
    ?>

    <h1>Exercício 15</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Insira o número</label>
        <input type="number" id="num2" name="num2"><br><br>

        <label>Insira o número</label>
        <input type="number" id="num3" name="num3"><br><br>

        <button>Calcular
        <?php
           
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($num1 == "" || $num2 == "" || $num3 == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "O maior de 3 números é: ".buscarMaior($num1,$num2,$num3);
                }
            ?>
        </textArea>

    </form>
</body>
</html>