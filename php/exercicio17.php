<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $idade = "";//Instanciando
    ?>

    <h1>Exercício 17</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="number" id="num" name="num"><br><br>

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
                    echo "A soma dos números é: ".somarNumeros($num);
                }
            ?>
        </textArea>

    </form>
</body>
</html>