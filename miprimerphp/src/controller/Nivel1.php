<?php

/** @author ivan * */
class Nivel1 {

    public function index() {
        $info = "";
        $urlForward = "";

        if (empty($_REQUEST['password'])) {

            $urlForward = Constantes::VISTA_ERROR;
            
        } else {


            if ($_REQUEST['password'] == Constantes::PWD) {

                $_SESSION["nivel"] = 1000;
                $info = "Nivel 1 completado";
                $urlForward = Constantes::VISTA_INDEX;
                
            } else {

                $urlForward = Constantes::VISTA_ERROR;
                
            }
        } require $urlForward;
    }

}

?>