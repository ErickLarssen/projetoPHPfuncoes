<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $palavra = "";//Instanciando
    ?>

    <h1>Exercício 19</h1>
    <form method="POST">
        <label>Insira o número</label>
        <input type="palavra" id="palavra" name="palavra"><br><br>

        <button>Calcular
        <?php
           
            $palavra = $_POST['palavra'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($palavra == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "É palíndromo?".palindromo($palavra);
                }
            ?>
        </textArea>

    </form>
</body>
</html>