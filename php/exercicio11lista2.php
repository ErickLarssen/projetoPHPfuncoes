<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 (Lista 2)</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $anos = "";//Instanciando
        $meses = "";
        $dias = "";
        $diasTotais = "";
    ?>

    <h1>Exercício 11 (Lista 2)</h1>
    <form method="POST">
        <label>Insira a sua idade em anos
            <input type="text" id="anos" name="anos">
        </label><br><br>
        <label>Insira a sua idade em meses
            <input type="text" id="meses" name="meses">
        </label><br><br>
        <label>Insira a sua idade em dias
            <input type="text" id="dias" name="dias">
        </label><br><br>

        <button>Calcular
        <?php
           
            $anos = $_POST['anos'];
            $meses = $_POST['meses'];
            $dias = $_POST['dias'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($anos == "" || $meses == "" || $dias == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "Os dias totais são: ".idadeEmDias($anos, $meses, $dias);
                }
            ?>
        </textArea>

    </form>
</body>
</html>