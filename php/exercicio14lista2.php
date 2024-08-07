<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 (Lista 2)</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $salarioFixo = "";//Instanciando
        $vendas = "";
        $comissaoAte1500 = "";
        $comissaoAcima1500 = "";
        $comissaoTotal = "";
        $salarioTotal = "";
    ?>
    <h1>Exercício 14 (Lista 2)</h1>
    <form method="POST">
        <label>Informe o salário fixo
            <input type="text" id="salarioFixo" name="salarioFixo">
        </label><br><br>

        <label>Informe o valor das vendas
            <input type="text" id="vendas" name="vendas">
        </label><br><br>


        <button>Calcular
        <?php
           
            $salarioFixo = $_POST['salarioFixo'];
            $vendas = $_POST['vendas'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($salarioTotal == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "O salário total é: ".calcularSalarioTotal($salarioTotal);
                }
            ?>
        </textArea>

    </form>
</body>
</html>