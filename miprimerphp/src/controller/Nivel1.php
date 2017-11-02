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
class Nivel1 {

//put your code here
//
//        private $error = "error default";
//    function getError() {
//        return $this->error;
//    }
//
//    function setError($error) {
//        $this->error = $error;
//    }
//
//    
    public function index() {
        $info = "";
        $error = "";
        $urlForward = "";

        if (empty($_REQUEST['password'])) {
            $error = "no campo password";
            $urlForward = Constantes::VISTA_ERROR;
        } else {


            if ($_REQUEST['password'] == Constantes::PWD) {
                $_SESSION["nivel"] = 1000;
                $info = "Nivel 1 completado";
                $urlForward = Constantes::VISTA_INDEX;
            } else {
                $error = "password incorrecta";
                $urlForward = Constantes::VISTA_ERROR;
            }
        }
        require $urlForward;
    }

}

?>