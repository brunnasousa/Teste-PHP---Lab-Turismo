<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você consegue ordenar? - 01</title>
</head>
<body>
    <h1 style="text-align: center">Teste PHP - Lab Turismo</h1>

    <!--Introduçao do problema proposto-->
    <h2>Você consegue ordenar ?</h2>
    <p>Um array de inteiros $arr, de tamanho $n é definido as [a[0], a[1], ..., a[n-1]]. Será fornecido um array de inteiros para ordenar. A ordenação primeiro precisa ser pela frequência de ocorrência, então por valor. Por exemplo, dado um array [4, 5, 6, 5, 4, 3], existe um 6 and 3, são dois 4’s e dois 5’s. A ordem da lista deve ser [3, 6, 4, 4, 5, 5].</p>
    <p>Explicaçäo Array fornecido: $n = 7, $arr = [3, 1, 8, 8, 2, 2, 4]
    Nossos dados parcialmente ordenados (com relação a $arr em ordem crescente em relação a quantidade de repetição) podem ser expressos como [[3, 1, 4], [8, 8, 2, 2]].
    Então, classificamos cada subconjunto de elementos com a mesma frequência em ordem crescente, resultando em [[1, 3, 4], [8, 8, 2, 2]].
    Tendo como resultado esperado o seguinte array, com ordenação final [1, 3, 4, 2, 2, 8, 8].</p>

    <p>Caso Teste 01: <br></p>
    <?php
        //foi escolhido o metodo usort, pois ele é definido pelo usuário e ordena os valores utilizando uma funçao para comparar

        $arr = [3, 1, 2, 2, 3,3, 4, 1]; //array definido pelo usuário

        $frequencia = array_count_values($arr);

        function ordenacaoUsort($arr, $frequencia) {
            usort($arr, 
                function($a, $b) use ($frequencia) {

                    $frequenciaComprimento = $frequencia[$a] - $frequencia[$b]; //frequencia dos elementos
                    
                    if ($frequenciaComprimento == 0) {
                        return $a - $b;
                    } else {
                        return $frequenciaComprimento;
                    }
                }
            );
            
            return $arr;
        }
        
        $resultadoFinal = ordenacaoUsort($arr, $frequencia);
        print_r($resultadoFinal);
    ?>


    <!--Dev-->
    <section>
        <br><br><br>
        <a target="_blank" rel="external" href="https://www.github.com/brunnasousa">Developed by <span>Brunna Danielle Santos de Sousa</span>, 2023.</a>
    </section>
    
</body>
</html>