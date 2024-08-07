<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $idade = "";//Instanciando
    ?>

    <h1>Exercício 12</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="number" id="idade" name="idade"><br><br>

        <button>Calcular
        <?php
           
            $idade = $_POST['idade'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($idade == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "Maior ou menor? ".maioridade($idade);
                }
            ?>
        </textArea>

    </form>
</body>
</html>