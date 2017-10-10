<?php

namespace controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$urlForward = "vista/vistaPHPWebPage.php";
$error = "";
$colores = array(
    1 => "red",
    2 => "blue",
    3 => "yellow",
    4 => "green",
    5 => "pink",
);

if (empty($_REQUEST)) {
    $urlForward = "vista/errorPHPWebPage.php";
    $error = "No hay parametros";
    require $urlForward;
    
} else {


    foreach ($_REQUEST as $key => $val) {


        if (in_array($key, $colores)) {

        }else{
            $urlForward = "vista/errorPHPWebPage.php";
            $error = " no es un color valido";
            require $urlForward;
        }
    }
                require $urlForward;
}

/* foreach alternativo solo tira los colores no validos imprime todo
 *     foreach ($_REQUEST as $key => $val) {
$urlForward = "vista/vistaPHPWebPage.php";

        if (in_array($key, $colores)) {
            require $urlForward;
        } else {
            $urlForward = "vista/errorPHPWebPage.php";
            $error = " no es un color valido";
            require $urlForward;
        }
    }
}
 */
?>