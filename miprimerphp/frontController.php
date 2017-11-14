<?php

require_once 'config\Config.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $urlForward = Constantes::VISTA_ERROR;

if (!empty($_REQUEST['url'])){
$url = $_REQUEST['url'];

//no importa como se escriba la url(mayusc/minusc), se pasa a minusculas para que coincida con el swith
       switch (strtolower($url)) {

            //repetido el controller -> index() por evitar fallo en caso de default (no tiene clase) la otra solucion serian ifs anidados pero se volveria mas sucio el codigo o hacer un controller para errores
           
                        case 'nivel1':
                            $controller = new Nivel1();
                            $controller->index();
                            break;
                        case 'nivel2':
                            $controller = new Nivel2();
                            $controller->index();
                            break;
                        case 'nivel3':
                            $controller = new Nivel3();
                            $controller->index();
                            break;
                        default:
                            require_once Constantes::VISTA_ERROR;
                            break;
                        
                             
       }
       
       if (!empty($_SESSION['nivel']) && $_SESSION['nivel']==1111) {
           require_once Constantes::VISTA_CAJA;
       }

}
