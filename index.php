<?php
    // ECHO: Comando para exibir texto na tela
    echo "olá, mundo! <br>";

    echo "<hr>";

    // Declaração de variáveis
    $nomePaciente = "Luan";
    $idade = 28;
    $nomeProcedimento = "Endoscopia";
    $precisaPreparo = true;
  
    // Concatenar com o ponto "."
    // echo "O nome do paciente é " . $nomePaciente;

    echo "O nome do paciente é " . $nomePaciente;
    echo "<br>Idade=" . $idade;
    echo "<br>Procedimento=" . $nomeProcedimento;
    echo "<br>Precisa de preparo? " . $precisaPreparo;

    echo "<hr>";

    echo gettype($nomePaciente) . "<br>";
    echo gettype($idade) . "<br>";
    var_dump($nomeProcedimento);

    if(is_int($precisaPreparo)){
        echo "<br>A variável é do tipo inteiro.";
    } else {
        echo "<br>A variável não é do tipo inteiro.";
    }

    echo "<h1> Trabalhando com arquitetura </h1> <br>";

    $nota1 = 10;
    $nota2 = 5.5;
    $nota3 = 9.23;
    $nota4 = 2.025;

    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    $media = $soma / 4;

    echo "Nota 1: " . $nota1 . "<br>";
    echo "Nota 2: " . $nota2 . "<br>";
    echo "Nota 3: " . $nota3 . "<br>";
    echo "Nota 4: " . $nota4 . "<br>";
    echo "A media das notas é: " . round($media, 2) . "<br>";

    echo "hr";
    echo "<h1> Arrays </h1>";
    $cores = array("Vermelho", "Azul", "Verde", "Amarelo");

    echo $cores[0];

    foreach($cores as $cor){
        echo "<br>" . $cor;
    }

    //Array associativo
    $usuario = [
        "nome" => "Gian bonitão",
        "email" => "gian@exemplo.com"
    ];

    // Array associativo
    $usuario = [
        "nome"  => "Karien",
        "email" => "karien.amaistop@senac.br",
    ];

    echo $usuario["nome"];

    echo "<hr>";

    // Array multidimensional
    $usuarios = [
        ["professor" => "Karien",  "email" => "karien.amaistop@sp.senac.br",  "disciplina" => "B.I"],
        ["professor" => "Luan",    "email" => "luan.omaismais@sp.senac.br",    "disciplina" => "Programação"],
        ["professor" => "Leandro", "email" => "leandro.omaismais@sp.senac.br", "disciplina" => "Hardware"],
    ];
    foreach($usuarios as $usuario)
        echo "" . $usuario["professor"] . " - " . $usuario["email"] . " - " . $usuario["disciplina"] . "<br>";


?>