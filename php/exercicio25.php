<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 25</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $mes = "";//Instanciando
        $dia = "";
        $ano = "";
    ?>

    <h1>Exercício 25</h1>
    <form method="POST">
        <label>Insira um mês</label>
        <input type="mes" id="mes" name="mes"><br><br>

        <label>Insira um dia</label>
        <input type="dia" id="dia" name="dia"><br><br>

        <label>Insira um ano</label>
        <input type="ano" id="ano" name="ano"><br><br>

        <button>Calcular
        <?php
           
            $mes = $_POST['mes'];
            $dia = $_POST['dia'];
            $ano = $_POST['ano'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($mes == "" || $dia == "" || $ano == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "".verificarData($mes,$dia,$ano);
                }
            ?>
        </textArea>

    </form>
</body>
</html>