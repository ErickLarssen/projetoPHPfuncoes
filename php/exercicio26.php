<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 26</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num = "";//Instanciando
        $i = "";
        $divisor = "";
    ?>

    <h1>Exercício 26</h1>
    <form method="POST">
        <label>Insira um número</label>
        <input type="num" id="num" name="num"><br><br>

        <button>Calcular
        <?php
           
            $num = $_POST['num'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($num == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "Os números que são divisores são: ".divisores($num);
                }
            ?>
        </textArea>

    </form>
</body>
</html>