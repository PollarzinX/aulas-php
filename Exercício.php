<?php



    $carrinho = [ 
    ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1], 
    ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2], 
    ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4], 
    ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1], 
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1], 
    ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1], 
    ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1], 
    ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2], 
    ];

    $total = 0;

    foreach ($carrinho as $item) {
        $subtotal = $item["preco"] * $item["quantidade"];
        $total += $subtotal;
    }
    echo "O valor total do carrinho é R$ " . number_format($total, 2, ",", ".") . "<br>";

    

?>