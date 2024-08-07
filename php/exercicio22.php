<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//Instanciando
        $num2 = "";
        $num3 = "";
        $num4 = "";
        $num5 = "";
    ?>

    <h1>Exercício 21</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="num1" id="num1" name="num1"><br><br>
        <input type="num2" id="num2" name="num2"><br><br>
        <input type="num3" id="num3" name="num3"><br><br>
        <input type="num4" id="num4" name="num4"><br><br>
        <input type="num5" id="num5" name="num5"><br><br>

        <button>Calcular
        <?php
           
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($num1 == "" || $num2 == "" || $num3 == "" || $num4 == "" || $num5 == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "A média dos 5 números é: ".mediaCinco($num1,$num2,$num3,$num4,$num5);
                }
            ?>
        </textArea>

    </form>
</body>
</html>