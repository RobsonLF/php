<?php
$nome = "Robson";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "Robson2";
    echo $nome."agora no teste2";
}

teste();
teste2();
?>
