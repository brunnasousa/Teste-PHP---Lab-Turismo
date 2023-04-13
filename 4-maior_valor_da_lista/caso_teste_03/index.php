<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior valor da lista - 03</title>
</head>
<body>
    <h1 style="text-align: center">Teste PHP - Lab Turismo</h1>

    <!--Introduçao do problema proposto-->
    <h2>Maior valor da lista</h2>
   
    <p>Neste desafio, você começará com uma matriz inicializada em zeros com índices começando em 1. Você receberá uma série de operações para executar em segmentos da lista. Cada operação consistirá em um índice inicial e final dentro do array e um número para adicionar a cada elemento dentro desse intervalo.<br></p>
    <p>Por exemplo, comece com uma matriz de 5 elementos: $lista = array(0, 0, 0, 0, 0) “lembrando que o índice inicial deve ser 1 e não 0”. As variáveis a e b representam os índices inicial e final, inclusive. Outra variável $v é usada contendo o valor a ser adicionado. O primeiro elemento está no índice 1.<br></p>
    
    <table border="1" style="text-align: center">
        <tr>
            <td>$a</td>
            <td>$b</td>
            <td>$v</td>
            <td>$lista</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>[ 0, 0, 0, 0, 0]</td>
        </tr>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>10</td>
            <td>[ 10, 10, 0, 0, 0] (somar 10 no intervalo dos índices 1 até 2)</td>
        </tr>

        <tr>
            <td>2</td>
            <td>4</td>
            <td>5</td>
            <td>[ 10, 15, 5, 5, 0] (somar 5 no intervalo dos índices 2 até 4)</td>
        </tr>

        <tr>
            <td>3</td>
            <td>5</td>
            <td>12</td>
            <td>[ 10, 15, 17, 17, 12] (somar 12 no intervalo dos índices 3 até 5)]</td>
        </tr>
    </table>

    <p>O maior valor final da lista é 17, esse valor deve ser encontrado após a soma de todas as operações dentro de $lista.<br></p>

    
    
    
    <p>Caso Teste 03: <br></p>
    <?php

        //dados fornecidos na questao
        $n = 40; //matriz
        $dados = array ( 
            //     $a  $b   $v
            array (29, 40, 787),
            array (9, 26, 219),
            array (21, 31, 214),
            array (8, 22, 719),
            array (15, 23, 102),
            array (11, 24, 83),
            array (14, 22, 321),
            array (5, 22, 300),
            array (11, 30, 832),
            array (5, 25, 29),
            array (16, 24, 577),
            array (3, 10, 905),
            array (15, 22, 335),
            array (29, 35, 254),
            array (9, 20, 20),
            array (33, 34, 351),
            array (30, 38, 564),
            array (11, 31, 969),
            array (3, 32, 11),
            array (29, 35, 267),
            array (4, 24, 531),
            array (1, 38, 892),
            array (12, 18, 825),
            array (25, 32, 99),
            array (3, 39, 107),
            array (12, 37, 131),
            array (3, 26, 640),
            array (8, 39, 483),
            array (8, 11, 194),
            array (12, 37, 502),


        );

        //funçao para a execuçao na lista
        function operacoesLista ($n, $dados){

            $lista = array_fill( 0, $n, 0);

            foreach ($dados as $dados) { //tabela
                $a = $dados [0];
                $b = $dados [1];
                $v = $dados [2];
                
                valoresSomados ($lista, $a, $b, $v);
            }

            $valorMax = maiorValorOperacoes ($lista);


            return $valorMax;
        }

        //para poder adicionar o valor $v, ele precisa percorrer $a até $b
        function valoresSomados (&$lista, $a, $b, $v){
            for ($i = $a; $i <= $b; $i++){
                $lista [ $i - 1 ] += $v;
            }
        }

        //para poder encontrar o maior valor e somar com as operacoes feitas
        function maiorValorOperacoes (&$lista) {
            $valorMax = 0;

            foreach ($lista as $valor) {
                $valorMax = max ($valorMax, $valor);
            }

            return $valorMax;
        }
        
        $resultado = operacoesLista ($n, $dados);
        echo "Dados Fornecidos: \$lista = $n <br /> Resultado esperado: $resultado";

    ?>


    <!--Dev-->
    <section>
        <br><br><br>
        <a target="_blank" rel="external" href="https://www.github.com/brunnasousa">Developed by <span>Brunna Danielle Santos de Sousa</span>, 2023.</a>
    </section>
    
</body>
</html>