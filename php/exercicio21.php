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
        $num = "";//Instanciando
    ?>

    <h1>Exercício 21</h1>
    <form method="POST">
        <label>Insira o número</label>
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
                    echo "Os números pares são: ".paresLista($num);
                }
            ?>
        </textArea>

    </form>
</body>
</html>