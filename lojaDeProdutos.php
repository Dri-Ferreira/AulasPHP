<?php
// 1️⃣ Criando um array de produtos (nome e preço)
$produtos = [
    ["nome" => "Teclado", "preco" => 80],
    ["nome" => "Mouse", "preco" => 40],
    ["nome" => "Monitor", "preco" => 300],
    ["nome" => "Headset", "preco" => 100],
    ["nome" => "Mousepad", "preco" => 20]
];

// 2️⃣ Aplicando desconto de 10% nos produtos que custam mais de R$50
foreach ($produtos as &$produto) {
    if ($produto["preco"] > 50) {
        $produto["preco"] *= 0.9; // Aplica 10% de desconto
    }
}

// 3️⃣ Exibindo os produtos usando while
$i = 0;
echo "<h3>Lista de Produtos:</h3>";
while ($i < count($produtos)) {
    echo "Produto: " . $produtos[$i]["nome"] . " | Preço: R$ " . number_format($produtos[$i]["preco"], 2, ",", ".") . "<br>";
    $i++;
}

// 4️⃣ Calculando o total da compra
$total = 0;
foreach ($produtos as $produto) {
    $total += $produto["preco"];
}

// 5️⃣ Aplicando desconto extra de 5% se o total for maior que R$200
if ($total > 200) {
    $total *= 0.95; // Aplica 5% de desconto
}

// 6️⃣ Exibindo o total final da compra
echo "<h3>Total da compra: R$ " . number_format($total, 2, ",", ".") . "</h3>";
?>
