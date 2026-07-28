<?php
    $preco = $_GET['preco'];
    $quantidade = $_GET['quantidade'];
    $total = $preco * $quantidade;

    echo "<br> Preço: " . $preco; 
    echo "<br> Quantidade: ". $quantidade; 
    echo "<br> Total: ". $total;
?>