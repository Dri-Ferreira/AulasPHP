<?php
// 1️⃣ Criando um array com três notas
$notas = [1, 5, 2];

// 2️⃣ Exibindo as notas usando um loop for
echo "Notas do aluno:";
for ($i = 0; $i < count($notas); $i++) {
    echo " " . $notas[$i] ." " ;
}

// 3️⃣ Calculando a média usando array_sum()
$soma = array_sum($notas);
$media = $soma / count($notas);

// 4️⃣ Exibindo o resultado com if/else
echo "Média do aluno: " . number_format($media, 2) ;

if ($media >= 6) {
    echo "✅ O aluno foi APROVADO" ;
    } else {
    echo "❌ O aluno foi REPROVADO";
}