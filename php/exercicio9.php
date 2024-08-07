<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//Instanciando
    ?>

    <h1>Exercício 09</h1>
    <form method="POST">
        <label></label>
        <input type="number" id="a" name="a"><br><br>

        <label></label>
        <input type="number" id="b" name="b"><br><br>

        <label></label>
        <input type="number" id="c" name="c"><br><br>

        <button>Calcular
        <?php
           
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            
        
        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($a == "" || $b == "" || $c == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "".delta($a,$b,$c);
                }
            ?>
        </textArea>

    </form>
</body>
</html>