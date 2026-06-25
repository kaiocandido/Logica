<?php

function transpose(array $input): array
{
    /*
     * Caso especial:
     *
     * Se a entrada for um array contendo apenas uma string vazia:
     *
     * [""] 
     *
     * O resultado esperado pelo teste também é:
     *
     * [""]
     *
     * Sem esse tratamento, o código calcularia maior tamanho como 0
     * e retornaria um array vazio [].
     */
    if (count($input) === 1 && $input[0] === "") {
        return [""];
    }

    /*
     * Array que vai guardar o resultado final.
     *
     * Exemplo:
     *
     * Entrada:
     * ["ABC", "DEF"]
     *
     * Resultado:
     * ["AD", "BE", "CF"]
     */
    $resultado = [];

    /*
     * Aqui vamos descobrir o tamanho da maior linha.
     *
     * Isso é necessário porque o for externo precisa saber
     * quantas colunas existem no total.
     *
     * Exemplo:
     *
     * ["AB", "DEF"]
     *
     * A maior linha é "DEF", tamanho 3.
     * Então precisamos percorrer as colunas 0, 1 e 2.
     */
    $maiorTamanho = 0;

    for ($i = 0; $i < count($input); $i++) {
        /*
         * strlen($input[$i]) retorna o tamanho da string atual.
         *
         * Exemplo:
         *
         * strlen("AB")  = 2
         * strlen("DEF") = 3
         */
        if (strlen($input[$i]) > $maiorTamanho) {
            $maiorTamanho = strlen($input[$i]);
        }
    }

    /*
     * Esse for externo percorre as COLUNAS.
     *
     * Exemplo:
     *
     * Entrada:
     * ["ABC", "DEF"]
     *
     * Coluna 0: A e D
     * Coluna 1: B e E
     * Coluna 2: C e F
     */
    for ($coluna = 0; $coluna < $maiorTamanho; $coluna++) {
        /*
         * Essa variável monta uma nova linha da saída.
         *
         * Exemplo:
         *
         * Na coluna 0:
         * $novaLinha começa como ""
         * adiciona "A"
         * adiciona "D"
         * vira "AD"
         */
        $novaLinha = "";

        /*
         * Esse for interno percorre as LINHAS.
         *
         * Ou seja:
         *
         * Para cada coluna, ele passa por todas as linhas
         * pegando o caractere daquela coluna.
         */
        for ($linha = 0; $linha < count($input); $linha++) {

            /*
             * Aqui verificamos se existe caractere nessa posição.
             *
             * $input[$linha][$coluna]
             *
             * Exemplo:
             *
             * $input = ["ABC", "DEF"]
             *
             * $input[0][0] = "A"
             * $input[1][0] = "D"
             * $input[0][1] = "B"
             * $input[1][1] = "E"
             */
            if (isset($input[$linha][$coluna])) {
                /*
                 * Se existe caractere, adicionamos ele na nova linha.
                 *
                 * Exemplo:
                 *
                 * $novaLinha = "";
                 * adiciona "A";
                 * $novaLinha = "A";
                 *
                 * adiciona "D";
                 * $novaLinha = "AD";
                 */
                $novaLinha .= $input[$linha][$coluna];
            } else {
                /*
                 * Se NÃO existe caractere nessa posição,
                 * precisamos decidir se devemos adicionar espaço ou não.
                 *
                 * Essa é a parte mais importante do exercício.
                 *
                 * Nem sempre podemos ignorar.
                 * Nem sempre podemos adicionar espaço.
                 */

                /*
                 * Começamos assumindo que NÃO existe caractere abaixo
                 * nessa mesma coluna.
                 */
                $existeCaractereAbaixo = false;

                /*
                 * Esse terceiro for olha as próximas linhas,
                 * abaixo da linha atual.
                 *
                 * A pergunta é:
                 *
                 * "Existe alguma linha abaixo que tenha caractere
                 * nessa mesma coluna?"
                 *
                 * Se sim, precisamos colocar espaço na linha atual
                 * para manter o alinhamento da matriz.
                 */
                for ($proximaLinha = $linha + 1; $proximaLinha < count($input); $proximaLinha++) {
                    /*
                     * Verifica se alguma linha abaixo possui caractere
                     * na coluna atual.
                     */
                    if (isset($input[$proximaLinha][$coluna])) {
                        /*
                         * Encontramos caractere abaixo.
                         *
                         * Então marcamos como true.
                         */
                        $existeCaractereAbaixo = true;

                        /*
                         * Como já encontramos o que queríamos,
                         * não precisamos continuar procurando.
                         */
                        break;
                    }
                }

                /*
                 * Se existe caractere abaixo, adicionamos espaço.
                 *
                 * Por quê?
                 *
                 * Porque a posição vazia precisa ser preservada.
                 */
                if ($existeCaractereAbaixo) {
                    $novaLinha .= " ";
                }

                /*
                 * Se NÃO existe caractere abaixo, não fazemos nada.
                 *
                 * Isso evita adicionar espaços desnecessários no final.
                 */
            }
        }

        /*
         * Depois de montar a linha transposta,
         * adicionamos no resultado final.
         */
        $resultado[] = $novaLinha;
    }

    /*
     * Retorna o array final transposto.
     */
    return $resultado;
}