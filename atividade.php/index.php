<?php
include 'Invoice.php';
$produto = new Invoice(113, "iphone 7 do BTS", 2, 2400);
echo "numero do produto: " . $produto->getNumero() . "<br>";
echo "descricao do produto: " . $produto->getDescricao() . "<br>";
echo "quantidade comprada: " . $produto->getQuantidade() . "<br>";
echo "preço do produto: " . $produto->getPreco() . "<br>";
echo "valor da fatura: " . $produto->getInvoiceAmount();


// Verifica se os parâmetros foram fornecidos
if (isset($_GET['palavra']) && isset($_GET['vezes'])) {
    // Obtém os valores dos parâmetros
    $palavra = $_GET['palavra'];
    $vezes = (int)$_GET['vezes']; // Converte para inteiro

    // Verifica se o número de vezes é válido
    if ($vezes > 0) {
        // Imprime a palavra o número de vezes desejado
        for ($i = 0; $i < $vezes; $i++) {
            echo "$palavra ";
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