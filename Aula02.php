<?php
$precoBruto = 150.459;

echo "Preço bruto: " . $precoBruto . "<br>";

//Possibilidade 1 - atribuir o valor a uma variável
$precoArredondado = round($precoBruto, 2);





//Possibilidade 2 - exibir diretamente o valor arredondado
echo round($precoBruto, 2) . "<br>";

echo "preço Arredondado: " . $precoArredondado . "<br>";

echo "Arredonda para cima:" . ceil($precoBruto) . "<br>";
echo "Arredonda para baixo:" . floor($precoBruto) . "<br>";

echo "<hr>";

echo "<h2> Utilidades Matemáticas </h2> <br>";

$numeros = [100, 200, 1, 10, 13, 900];

$menorValor = min($numeros); //retorna o menor valor do array ($numeros) = 1
$maiorValor = max($numeros); //retorna o maior valor do array ($numeros) = 900

echo "Menor valor: " . $menorValor . "<br>";
echo "Maior valor: " . $maiorValor . "<br>";

$valorAleatorio = rand(1, 100); //retorna um valor aleatório entre 1 e 100
echo "Valor aleatório entre 1 e 100: " . $valorAleatorio . "<br>";

// Formatação Padrão Brasileiro
echo "R$ " . number_format($precoBruto, 2, ",", ".") . "<br>";

// PAUSA EXERCÍCIO N1
$media = 5.236;

echo  number_format($media, 1, ",", ".") . "<br>"; // 5,2

echo "<h2> Manipulação de Strings </h2> <br>"; // Manipulação de textos

$email = "contato@EMPRESA.com";

$emailMinusculo = strtolower($email); //converte todos os caracteres para minúsculo
$emailMaiusculo = strtoupper($email); //converte todos os caracteres para maiúsculo

$vFrutas = "Maçã, banana, Pera, Ameixa, Jambo, Jabuticaba, Limão"; //string com várias frutas separadas por vírgula e espaço

$arrFrutas = explode(", ", $vFrutas); //divide a string em um array, usando ", " como separador

echo $arrFrutas[4] . "<br>"; // exibe "Jambo"

$v2Juntas = implode(" - ", $arrFrutas); // junta os elementos do array em uma string, separando-os por " - "

echo $v2Juntas . "<br>"; // exibe todas as frutas separadas por " - "
echo "Quantidade de frutas: " . count($arrFrutas) . "<br>"; // exibe a quantidade de frutas no array

echo str_replace("Maçã", "Manga", $vFrutas) . "<br>"; // substitui "Maçã" por "Manga" na string original

echo substr($vFrutas, 0, 5) . "<br>"; // exibe os primeiros 5 caracteres da string

echo mb_strlen("Maçã", 'UTF-8') . "<br>"; // exibe a quantidade de caracteres na palavra "Maçã"

echo "<hr>";

echo "<h2> Poder dos Arrays </h2> <br>";

$clientes = ["joão", "Maria"];
$novos = ["José", "Ana"];

$todes = array_merge($clientes, $novos); //combina os dois arrays em um só

array_push($todes, "Natan"); //adiciona "Luana" ao final do array combinado

print_r($todes); //exibe o conteúdo do array combinado

if (in_array("Vitor", $todes)) {                              // Verifica se "Vitor" está no array combinado
    echo "<br> Vitor está na lista de clientes. <br>";      ////
} else {                                                    ///   
    echo "<br> Vitor não está na lista de clientes. <br>";  //
}

$emails = " ADMIN@EMPRESA.COM ,  contato@Site.COM  ,SUPORTE@dominio.com  ,   Vendas@Empresa.com ";

$arrEmails = explode(",", $emails); // Divide a string em um array usando vírgula como separador


$primerioEmail = trim($arrEmails[0]);             // Remove espaços extras no início e fim
echo "Emails formatados: <br>" . strtolower($primerioEmail) . "<br>";


print_r($todes);

//echo in_array("Vitor", $todes);

if (in_array("Vitor", $todes)) {

    echo "<br><br>Usuário encontrado.</br>";
} else {
    echo "<br><br>Usuário <b>NÃO</b> encontrado.</br>";
}

// Ordena por ordem alfabética (A-Z)
sort($todes);

echo "<br>" . implode(", ", $todes); // Exibe os nomes ordenados

$usuario = "Sérgio";

echo isset($usuario); // Verifica se a variável $usuario está definida
echo empty($usuario); // Verifica se a variável $usuario está vazia

if (empty($usuario)) {
    echo "<br> A variável está vazia<br>";
} else {
    echo "<br> A variável está preenchida<br>";
}

echo "<br>", "<hr>", "<br>";

switch ($usuario) {
    case "Sérgio":
        echo "Bem-vindo, Sérgio!";
        break;
    case "Maria":
        echo "Bem-vinda, Maria!";
        break;
    default:
        echo "Usuário desconhecido.";
}

if ($perfil == "admin") {
    echo "Acesso total";
} else if ($perfil == "Editor") {
    echo "Pode criar e editar conteúdo";
}

$numeros = ['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez'];


for ($elefantes = 1; $elefantes <= 10; $elefantes++) {



    if (($elefantes % 2) == 1) {

        echo $numeros[$elefantes - 1] . " elefantes incomodam muita gente <br>";
    } else {

        echo "{$numeros[$elefantes - 1]} elefantes ";
        for ($i = 1; $i <= $elefantes; $i++) {
            echo "incomodam ";
        }
        echo "muito mais... <br>";
    }
    echo "<hr>";
}

$numeros = ['um', 'dois', 'três'];

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

$precos = ["Notebook" => 3500, "Mouse" => 80, "Teclado" => 700];

foreach ($precos as $produto => $preco) {
    echo "O preço do(a) {$produto} é R$ " . number_format($preco, 2, ",", ".") . "<br>";
}


function boasVindas($nome = "", $artigo = "")
{
    if (empty($nome)) {
        echo "Não sou educado com pessoas sem nome<br>";
    } elseif ($artigo == "a") {
        echo "Seja bem vinda, $nome <br>";
    } elseif ($artigo == "o") {
        echo "Seja bem vindo, $nome <br>";
    } elseif ($artigo == "") {
        echo "Seja bem vinde, $nome <br>";
    }
}

boasVindas(); // Chamada sem argumento, usa o valor padrão
boasVindas("Ana"); // Chamada com argumento

function somar($num1, $num2) 
{
    echo $num1 + $num2;
}

somar(10, 200); //00 Chamada da função com dois argumentos