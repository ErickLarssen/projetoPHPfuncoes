<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 27</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $texto = "";//Instanciando
        $contar = "";
    ?>

    <h1>Exercício 27</h1>
    <form method="POST">
        <label>Insira um texto</label>
        <input type="texto" id="texto" name="texto"><br><br>

        <button>Calcular
        <?php
           
            $texto = $_POST['texto'];

        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
            <?php
                if($texto == ""){
                    echo "Preencha o campo!";
                }else{
                    echo "Total de palavras: ".contarPalavras($texto);
                }
            ?>
        </textArea>

    </form>
</body>
</html>