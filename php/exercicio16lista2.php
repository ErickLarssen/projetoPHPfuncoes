<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 (Lista 2)</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $valor = "";//Instanciando
        $i = "";
        $resultado = "";
    ?>
    <h1>Exercício 16 (Lista 2)</h1>
    <form method="POST">
        <label>Informe o número da conta
            <input type="text" id="numeroConta" name="numeroConta">
        </label><br><br>

        // ESSE CÓDIGO ESTÁ INCOMPLETO E ERRADO, ME DESCULPE ALAN KKKKK
        <button>Calcular
        <?php
           
            $numeroConta = $_POST['numeroConta'];
            $saldo = $_POST['saldo'];
            $debito = $_POST['debito'];
            $credito = $_POST['credito'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($numeroConta == "" || $saldoAtual == "" || $mensagem == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "O salário total é: ".calcularSaldoAtual($numeroConta, $saldoAtual, $mensagem);
                }
            ?>
        </textArea>

    </form>
</body>
</html>