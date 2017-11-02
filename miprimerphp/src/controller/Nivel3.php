<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nivel1
 *
 * @author ivan
 */
class Nivel3 {

    public function index() {
//put your code here


        if (($_SESSION['nivel'] != 1100) || (empty($_SESSION))) {
                          $error = "orden incorrecto";
                $urlForward = Constantes::VISTA_ERROR;
        } else {
            
            if (empty($_REQUEST['pwd'])) {
                          $error = "pwd vacia";
                $urlForward = Constantes::VISTA_ERROR;
                echo 'no pwd';
            } else {
                if ($_REQUEST['pwd'] == Constantes::PWD3) {
                    $_SESSION['nivel'] = 1111;
     $info = "Nivel 3 pasado";
                $urlForward = Constantes::VISTA_INDEX;
                } else {
                          $error = "pwd incorrecta";
                $urlForward = Constantes::VISTA_ERROR;
                }
            }
        } require $urlForward;
    }

}

?>