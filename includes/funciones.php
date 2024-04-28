<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
//revisar autenticacion
function isAuth(): void {
    if(!isset($_SESSION['login'])){
        header('Location: /');
    }
}
function isAdmin(): void{
    if(!isset($_SESSION['admin'])){
        header('Location: /');
    }
}
function esUltimo( string $act, string $prox): bool{
    if($act!=$prox){
        return true;
    }
    return false;
}