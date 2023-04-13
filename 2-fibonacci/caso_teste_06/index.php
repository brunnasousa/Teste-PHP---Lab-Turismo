<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci - 06</title>
</head>
<body>
    <h1 style="text-align: center">Teste PHP - Lab Turismo</h1>

    <!--Introduçao do problema proposto-->
    <h2>Fibonacci</h2>
   
    <p>Os números de Fibonacci são uma sequência de números onde cada número após os dois primeiros é uma soma dos dois anteriores. A título ilustrativo, segue uma pequena sequência dada a valores iniciais de (0, 1) é (0, 1, 1, 2, 3, 5, 8, 13).
    Dado um inteiro $n, calcule os primeiros n números na sequência de Fibonacci, dados os elementos iniciais de (0, 1). Retorna um array com todos os valores em ordem crescente</p>

    <p>Caso Teste 06: <br></p>
    <?php
        
        $n = 10; //dados do usuário

        function fibonacci ($n) {

            $arrayFibonacci = array ();

            if ($n == 0) {
                return $arrayFibonacci;
            } else if ($n == 1) {
                $arrayFibonacci [] = 0;

                return $arrayFibonacci;
            
            } else if ($n == 2) {
                $arrayFibonacci [] = 0;
                $arrayFibonacci [] = 1;

                return $arrayFibonacci;
            } else {
                $arrayFibonacci [] = 0;
                $arrayFibonacci [] = 1;

                for ($i = 2; $i < $n; $i++){ //para poder saaber os proximos números de fibonacci
                    $arrayFibonacci [] = $arrayFibonacci [$i - 1] + $arrayFibonacci [$i -2];
                }

                return $arrayFibonacci;
            }
            
        }

        $resultadoFibonacci = fibonacci($n);
        
        echo "Dados fornecido para n: $n <br />" ;
        echo "Resultado esperado: " . implode(", ",$resultadoFibonacci,);
    ?>


    <!--Dev-->
    <section>
        <br><br><br>
        <a target="_blank" rel="external" href="https://www.github.com/brunnasousa">Developed by <span>Brunna Danielle Santos de Sousa</span>, 2023.</a>
    </section>
    
</body>
</html>