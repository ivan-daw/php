<?php

/** @author ivan * */
class Nivel3 {

    public function index() {


        if ((empty($_SESSION)) || ($_SESSION['nivel'] != 1100)) {

            $urlForward = Constantes::VISTA_ERROR;
            
        } else {

            if (empty($_REQUEST['pwd'])) {

                $urlForward = Constantes::VISTA_ERROR;
                
            } else {

                if ($_REQUEST['pwd'] == Constantes::PWD3) {

                    $_SESSION['nivel'] = 1111;
                    $info = "Nivel 3 pasado";
                    $urlForward = Constantes::VISTA_INDEX;
                    
                } else {

                    $urlForward = Constantes::VISTA_ERROR;
                    
                }
            }
        } require $urlForward;
    }

}

?>