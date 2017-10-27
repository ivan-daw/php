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

  public function index() {
if(isset($_REQUEST['password']))
    {
$urlForward = "vista/errorPHPWebPage.php";
require $urlForward;
    }else{


if (password == "abc"){
$_SESSION["nivel"] = 1000;
$urlForward = "vista/index.php";
require $urlForward;
}else{
$urlForward = "vista/errorPHPWebPage.php";
require $urlForward;
}
}
  }
}



//      
//        String password = request.getParameter("password");
//
//        //Si existe una sesion anterior la invalida
//        if (request.getSession().getAttribute(Constantes.NIVEL) != null) {
//            
//            request.getSession().invalidate();
//            
//        }
//
//        if (password == null) {
//
//            paginaDestino = Constantes.PAGINA_ERROR;
//            request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//        } else {
//
//            if (password.equals(Constantes.PWD1)) {
//                
//                nivel = 1000;
//                request.getSession().setAttribute(Constantes.NIVEL, nivel);
//                request.setAttribute(Constantes.MSG_INFO, "Pasado Nivel 1");
//                request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//            } else {
//
//                paginaDestino = Constantes.PAGINA_ERROR;
//                request.getRequestDispatcher(paginaDestino).forward(request, response);
//                
//            }
//        }
//    }

?>