<?php

/** @author ivan * */
class Nivel2 {

    public function index() {


        if (( (empty($_SESSION)) || $_SESSION['nivel'] != 1000)) {

            $urlForward = Constantes::VISTA_ERROR;
            
        } else {

            if (empty($_REQUEST['nums'])) {

                $urlForward = Constantes::VISTA_ERROR;
                
            } else {

                if (empty($_SESSION['comprobador'])) {

                    $_SESSION['comprobador'] = 1;
                    
                }
                
                $opcion = $_SESSION['comprobador'];
                switch ($opcion) {

                    case 1:

                        if ($_REQUEST['nums'] == Constantes::PWD2_1) {

                            $_SESSION['comprobador'] = 2;
                            $info = "Primer numero correcto. Continua";
                            $urlForward = Constantes::VISTA_INDEX;
                            
                        } else {

                            $urlForward = Constantes::VISTA_ERROR;
                            
                        }

                        break;

                    case 2:

                        if ($_REQUEST['nums'] == Constantes::PWD2_2) {

                            $_SESSION['comprobador'] = 3;
                            $info = "Segundo numero correcto. Continua";
                            $urlForward = Constantes::VISTA_INDEX;
                            
                        } else {

                            $urlForward = Constantes::VISTA_ERROR;
                            
                        }

                        break;

                    case 3:

                        if ($_REQUEST['nums'] == Constantes::PWD2_3) {

                            unset($_SESSION["comprobador"]); //remover atributo comprobador de la session al no ser necesario mas
                            $_SESSION['nivel'] = 1100;
                            $info = "Nivel2 completado";
                            $urlForward = Constantes::VISTA_INDEX;
                            
                        } else {

                            $urlForward = Constantes::VISTA_ERROR;
                            
                        }

                        break;

                    default:

                        $urlForward = Constantes::VISTA_ERROR;
                        break;
                        
                }
            }
        } require $urlForward;
    }

}

?>