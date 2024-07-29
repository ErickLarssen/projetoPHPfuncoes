<?php
    //Instanciar
    $num1 = 0; // Variáveis Globais (Código todo utiliza)
    $num2 = 0;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//Fim do somar

function subtrair($num1,$num2){
    return $num1 - $num2;
}//Fim do subtrair

function multiplicar($num1,$num2){
    return $num1 * $num2;
}//Fim do multiplicar

function dividir($num1,$num2){
    if ($num2 == 0){
        return "Impossível dividir por zero";
    }else{
        return $num1 / $num2;

    }
}//Fim do dividir

function potencia($num1,$num2){
    if($num2 < 0){
        return "Impossível calcular a potência de expoente negativo";
    }else{
        return pow($num1,$num2);
    }
    
}//Fim do método

function raiz($num1){
    if ($num1 < 0){
        return sqrt($num1);
    }else{
        return "Impossível calcular a raiz de número negativo";
    }
    return sqrt($num1);
}//Fim do método

    function tabuada($num1){
        $i = 0;
        $resultado = "";
        for($i;$i<=10;$i++){
            $resultado .= "<br>".$num1." * ".$i." = ".($num1*$i);
        }//Fim do 'for'
        return $resultado;

    }//Fim do método

    function areaRetangulo($base,$altura){
        if (($base <=0) && ($altura)){
            return "Impossível calcular a área";
        }else{
            return $base * $altura;
        }
    }//Fim do método

    function delta($a,$b,$c){
        $delt = pow($b,2) - 4 * $a * $c;
        if ($delt < 0){
            return -1;
        }else{
            return $delt;
        }
  }//Fim do delta
        function x1($a, $b, $c){
            $d = delta($a,$b,$c);
            if($d == -1){
                return "Impossível calcular x1, delta negativo";
            }else{
                return (-$b + sqrt($d))/(2*$a);
            }
             
        }//Fim do X1

        function parImpar($num){
            if($num % 2 == 0){
                return "Par";
            }else{
                return "Ímpar";
            }
        }//Fim do 'parImpar'

        function maioridade($idade){
            if($idade < 18){
                return "Menor de idade";
            }else{
                return "Maior de idade";
            }
        }// Fim do 'maioridade

        function dobro($num){
            return $num * 2;
        }// Fim do 'dobro'

        function celsiusParaFahrenheit($celsius){
            return ($celsius * 1.8)+32;
        }// Fim do método

        function buscarMaior($num1, $num2, $num3){
            if($num1 > $num2 && $num1 > $num3){
                return $num1;
            }else if(($num2 > $num1) && ($num2 > $num3)){
                return $num2;
            }else{
                return $num3;
            }
        }// Fim da operação

        function numeroPositivoNegativo($num){
            if($num > 0){
                return "O número é positivo";
            }else if($num < 0){
                return "O número é negativo";
            }else{
                return "O número é zero";
            }
        }// Fim da operação

        function somarNumeros($num){
            $i = 1;
            $soma = 0;
            for($i; $i <= $num; $i++){
                $soma += $i;
            }//Fim do "for"
            return $soma;
        }//Fim da operação

        function primo($num){
            if($num <= 0){
                return "Não é primo!";
            }
            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0){
                    return "Não é primo!";
                }
            }
            return $num;
        }// Fim do método primo

        function palindromo($palavra){
            if($palavra == strrev($palavra)){
                return "Palíndromo";
            }else{
                return "Não é palíndromo";
            }
        }// Fim do método

        function fatorial($num){
            $i = $num;
            for($i;$i >= 1;$i--){
                $num *= $i;
            }
            return $num;
        }// Fim do fatorial

        function paresLista($num){
            $i = 1;
            $pares = "";
            for($i; $i <= $num; $i++){
                if($i % 2 == 0){
                    $pares .= "<br>".$i;
                }
            }//Fim do "for"
            return $pares;
        }//Fim do método

        function contarVogais($palavra){
            $tamanho = strlen($palavra);//Tamanho da palavra
            $i = 0;
            $letra = "";
            $contador = 0;
            for($i; $i < $tamanho; $i++){
                $letra = substr($palavra,$i,1);
                switch($letra){
                    case 'A':
                        $contador++;
                        break;
                    case 'a':
                        $contador++;
                        break;
                    case 'E':
                        $contador++;
                        break;
                    case 'e':
                        $contador++;
                        break;
                    case 'I':
                        $contador++;
                        break;
                    case 'i':
                        $contador++;
                        break;
                    case 'O':
                        $contador++;
                        break;
                    case 'o':
                        $contador++;
                        break;
                    case 'U':
                       $contador++;
                        break;
                    case 'u':
                        $contador++;
                        break;
                }

            }//Fim do "for"

            return $contador;
        }//Fim do método

        function mostrarPrimos($num){
            $numPrimos = "";
            $i=1;
            for($i;$i <= $num; $i++){
                if(primo($num) != "Não é primo"){
                    $numPrimos .= "<br>" .$i;    
                }
            }    
            return $numPrimos;
        }//Fim do Método

        function verificarData($mes,$dia,$ano){
           if(checkdate($mes, $dia, $ano)){
                return "Data válida.";
           }else{
                return "Data inválida.";
           }
        }//Fim do Método

        function mediaCinco($num1,$num2,$num3,$num4,$num5){
            return ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
        }//Fim do método

        function divisores($num){
            $i = 1;
            $divisor = "";
            for($i;$i < $num; $i++){
                if($num % $i == 0){
                    $divisor.= "<br>".$i;
                }
                    

            }//Fim do 'for'
            return $divisor;
        }//Fim do Método

        function fibonaccci($num){
            $i = 0;
            $fib0 = 0;
            $fib1 = 0;
            $fib2 = 0;
            $resultado = $fib0. "<br>".$fib1;
            for($i;$i <= $num; $i++){
                $fib2 = $fib0 + $fib1;
                $resultado = "<br>" $fib2;
                $fib0 = $fib1;
                $fib1 = $fib2;
            }
            return $resultado;
        }//Fim do Método

        function contarPalavras($texto){
            $contar = str_word_count($texto,0);
            return $contar;
        }//Fim do Método

        function x2($a, $b, $c){
            $d = delta($a,$b,$c);
            if($d == -1){
                return "Impossível calcular x2, delta negativo";
            }else{
                return (-$b + sqrt($d))/(2*$a);
            }
             
        }//Fim do X2
        
  

//Resultados
echo "<br><em>A soma dos números é: ".somar(5,8);
echo "<br><em>A subtração dos números é: " .subtrair(9,15);
echo "<br><em>A multiplicação dos números é: " .multiplicar(10,8);
echo "<br><em>A divisão dos números é: " .dividir(3,1);
echo "<br><em>A potência dos números é: " .potencia(10,2);
echo "<br><em>A raiz do número informado é: " .raiz(10);
echo "<br><em>A tabuada do número informado é: " .tabuada(8);
echo "<br><strong><em>A área do retângulo é: " .areaRetangulo(5,6);
echo "<br><em>" .delta(4,5,6);
echo "<br><em>O X1 é: ".x1(-8,5,9);
echo "<br><em>O X2 é: ".x2(-8,5,9);
echo "<br>Par ou Ímpar? ".parImpar(15);
echo "<br>Maior ou menor? ".maioridade(21);
echo "<br>O dobro do número é: ".dobro(100);
echo "<br>Temperatura em Fahrenheit: ".celsiusParaFahrenheit(25);
echo "<br>O maior de 3 números é: ".buscarMaior(54,10,36);
echo "<br>O número é: ".numeroPositivoNegativo(25);
echo "<br>A soma dos números é: ".somarNumeros(25);
echo "<br>".primo(2);
echo "<br>É palíndromo? " .palindromo(56);
echo "<br>O fatorial é: ".fatorial(3);
echo "<br>Os números pares são: ".paresLista(100);
echo "<br>A média dos 5 números é: ".mediaCinco(2,3,5,6,7);
echo "<br>Há vogais na palavra digitada: ".contarVogais("Erick");
echo "<br>Números primos: ".mostrarPrimos(35);
echo "<br>".verificarData('2','30','2024');
echo "<br>Os números que são divisores são: ".divisores(81);
echo "<br>Total de palavras: ".contarPalavras("Um número natural n é dito divisor de um número natural p quando a divisão de p por n for exata, isto é, se o resto for zero. Por exemplo, 8 é divisor de 16, pois 16÷8=2 com resto 0. Do mesmo modo, temos que 2 é divisor de 30, já que a divisão de 30 por 2 resulta em 15 com resto 0");
echo "<br>Sequência de Fibonacci: ".fibonacci(10);
?>