<?php
//var_dump($POST); //função que imprime vetor com os tipos dos campos


// isset() = teste se a variavel existe

if (
    isset($POST["nomeAluno"])
    && isset($POST["notaBimestre1"])
    && isset($POST["notaBimestre2"])
) {

    if (
        !empty($POST["nomeAluno"])
        && !empty($POST["notaBimestre1"])
        && !empty($POST["notaBimestre2"])
    ) {

        echo "ok";

        
$nomeAluno = $_POST["nomeAluno"];
$notaPrimeiroBimestre = $_POST["notaBimestre1"];
$notaSegundoBimestre = $_POST["notaBimestre2"];

echo "Nome do aluno: $nomeAluno";
echo "<br>";
echo "Nota Primeiro Bimestre: $notaPrimeiroBimestre";
echo "<br>";
echo "Nota Segundo Bimestre: $notaSegundoBimestre";
echo "<br>";

$media = ($notaPrimeiroBimestre + $notaSegundoBimestre) / 2;
//echo "Média = $media";


if ($media >= 7) {
    echo "você está aprovado com média = $media";
} else if ($media < 4) {

    echo "<br>Você está reprovado com média = $media";
} else if (($media >= 4) && ($media <= 7)) {
    echo "<br>Você está de recuperação, com média = $media";
}

    } else {
        echo "Campos dos formulários estão vazios.";
?>

        <a href="formulario.html">voltar para o formulário!</a>;

<?php

    }
} else {
    echo "não há post";
}

?>