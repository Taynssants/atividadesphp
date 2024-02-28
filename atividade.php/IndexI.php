<?php
// include 'Empregado.php';
// $var = new Empregado("Pedro", "Pascal", 4000);
// echo "Salário antes do aumento: " . $var->getSalario() . "<br>";
// $var->aumentarSalario();
// echo "Salário após o aumento: " . $var->getSalario() . "<br>";
// var_dump($var);

// exercicio.php

// Verifica se os parâmetros foram fornecidos
if (isset($_GET['nomeEmpregado']) && isset($_GET['salario'])) {
    // Obtém os valores dos parâmetros
    $nomeEmpregado = $_GET['nomeEmpregado'];
    $salario = (int)$_GET['salario']; // Converte para inteiro

    // Verifica se o número de vezes é válido
    if ($salario > 0) {
        // Imprime a palavra o número de vezes desejado
        for ($i = 0; $i < $salario; $i++) {
            echo "$nomeEmpregado ";
        }
    } else {
        // Mensagem de erro se o número de vezes não for válido
        echo "Número de vezes deve ser maior que zero.";
    }
} else {
    // Mensagem de erro se os parâmetros não foram fornecidos corretamente
    echo "Parâmetros não fornecidos corretamente. Use '?palavra=SuaPalavra&vezes=Numero' na URL.";
}

?>