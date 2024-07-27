<?php
include 'conexaoBD.php';

function cadastrarRoupa($codigoU, $peca,$tamanho,$cor, $preco){
    connect();
    query("INSERT INTO roupa (peca, tamanho, cor, preco, codigoU)
    VALUES ('$peca','$tamanho','$cor', '$preco', $codigoU)");
    close();
}

function mostrarRoupas($codigoU){
    connect();
    $resultados=query("SELECT * FROM roupa WHERE codigoU = $codigoU");
    close();
    return $resultados;
}

function mostrarRoupasAlterar($codigo){
    connect();
    $resultados=query("SELECT * FROM roupa
    WHERE codroupa=$codigo");
    close();
    return $resultados;
}

function alterarRoupa($codigo, $peca, 
$tamanho, $cor, $preco){
    connect();
    query("UPDATE roupa SET 
    peca='$peca', tamanho='$tamanho', cor = '$cor', preco = '$preco' 
    WHERE codroupa=$codigo");
    close();
}

function excluirRoupa($codigo){
    connect();
    query("DELETE FROM roupa WHERE codroupa=$codigo");
    close();
}