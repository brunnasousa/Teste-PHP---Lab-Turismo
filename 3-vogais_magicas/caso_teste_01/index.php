<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogais Mágicas - 01</title>
</head>
<body>
    <h1 style="text-align: center">Teste PHP - Lab Turismo</h1>

    <!--Introduçao do problema proposto-->
    <h2>Vogais Mágicas</h2>
   
    <p>Nós definimos uma subsequência mágica para ser uma sequência de letras dentro de uma string que contém todas as cinco vogais em ordem: a, e, i, o, u. Pode haver qualquer número de ocorrências de cada vogal, mas elas devem estar nessa ordem. Por exemplo, aeeiou é uma sequência mágica, mas aeaioua não é Julia tem uma string, s, consistindo de uma ou mais das seguintes letras: a, e, i, o e u. Ela quer determinar a sequência mágica mais longa em sua corda.<br></p>
    <p>A função deve retornar o comprimento da sequência mágica mais longa dentro da string de entrada. Se não ocorrer uma subsequência, retorne 0<br></p>
    <p>Exemplo: <br> $s = aeiaaioooau<br></p>
    <table border="1" style="text-align: center">
        <tr>
            <td><strong>a</td>
            <td><strong> e</td>
            <td><strong> i</td>
            <td>a</td>
            <td>a</td>
            <td><strong> i</td>
            <td><strong> o</td>
            <td><strong> o</td>
            <td><strong> o</td>
            <td>a</td>
            <td><strong> u</td>
        </tr>
    </table>

    <p>Resultado esperado: 8<br></p>

    
    
    
    <p>Caso Teste 01: <br></p>
    <?php
        $s = 'aeiaaioooau'; //dado fornecido pelo usuario

        function sequenciaVocaisMagicas ($s) {

            $n = strlen ($s); //colocando numa string

            //dados iniciais e básicos
            $vogais = array('a', 'e', 'i', 'o', 'u');
            $vogalInicial = 0;
            $comprimentoSequenciaLonga = 0;
            $comprimentoAtual = 0;

            for ($i =0; $i < $n; $i++){

                if ($s [$i] == $vogais [$vogalInicial]) {
                    $comprimentoAtual++;

                    if ($vogalInicial == 4 && $comprimentoAtual > $comprimentoSequenciaLonga) {
                        $comprimentoSequenciaLonga = $comprimentoAtual;
                    }
                } else {
                    $comprimentoAtual = 0;

                    if (in_array ($s [$i], $vogais)) {
                        $vogalInicial = array_search ($s [$i], $vogais);
                    }
                }

                $vogalInicial++;
            }

            return $comprimentoSequenciaLonga;
        }

        $resultado = sequenciaVocaisMagicas ($s);
        echo "Resultado esperado: $resultado";

        

    ?>


    <!--Dev-->
    <section>
        <br><br><br>
        <a target="_blank" rel="external" href="https://www.github.com/brunnasousa">Developed by <span>Brunna Danielle Santos de Sousa</span>, 2023.</a>
    </section>
    
</body>
</html>