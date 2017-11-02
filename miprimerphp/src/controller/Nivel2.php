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
class Nivel2 {

    public function index() {
//put your code here


        if (($_SESSION['nivel'] != 1000) || (empty($_SESSION))) {
            $error = "orden incorrecto de nivel";
                $urlForward = Constantes::VISTA_ERROR;
        } else {

            if (empty($_REQUEST['nums'])) {
                   $error = "nums vacios";
                $urlForward = Constantes::VISTA_ERROR;
            } else {

                if (empty($_SESSION['comprobador'])) {
                    $_SESSION['comprobador'] = 1;
                } else {
                    $opcion = $_SESSION['comprobador'];

                    switch ($opcion) {

                        case 1:
                            if ($_REQUEST['nums'] == Constantes::PWD2_1) {
                                $_SESSION['comprobador'] = 2;
                            $info = "numero 1 correcto, introduce el siguiente";
                $urlForward = Constantes::VISTA_INDEX;
                            } else {
                                  $error = "numero 1 incorrecto";
                $urlForward = Constantes::VISTA_ERROR;
                            }
                            ;
                            break;

                        case 2:
                            if ($_REQUEST['nums'] == Constantes::PWD2_2) {
                                $_SESSION['comprobador'] = 3;
                             ;
                                    $info = "numero 2 correcto, introduce el siguiente";
                $urlForward = Constantes::VISTA_INDEX;
                            } else {
                                  $error = "numero 2 incorrecto";
                $urlForward = Constantes::VISTA_ERROR;
                            }
                            
                            break;

                        case 3:
                            if ($_REQUEST['nums'] == Constantes::PWD2_3) {
                                unset($_SESSION["comprobador"]); //remover atributo comprobador de la session
                                $_SESSION['nivel'] = 1100;
                                    $info = "Nivel3 pasado";
                $urlForward = Constantes::VISTA_INDEX;
                            } else {
                                $error = "numero 3 incorrecto";
                $urlForward = Constantes::VISTA_ERROR;
                            }
                            
                            break;

                        default:
                          $error = "opcion incorrecta";
                $urlForward = Constantes::VISTA_ERROR;
                            break;
                    }
                }
            } require $urlForward;
        }
    }

}

?>