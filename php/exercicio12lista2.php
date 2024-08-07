<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 (Lista 2)</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $quantidade = "";//Instanciando
        $precoPorUnidade = "";
        $custoTotal = "";
    ?>

    <h1>Exercício 12 (Lista 2)</h1>
    <form method="POST">
        <label>Insira um valor</label>
        <input type="text" id="custoTotal" name="custoTotal"><br><br>

        <button>Calcular
        <?php
           
            $custoTotal = $_POST['custoTotal'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($custoTotal == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "O custo total da compra é: ".macas($custoTotal);
                }
            ?>
        </textArea>

    </form>
</body>
</html>