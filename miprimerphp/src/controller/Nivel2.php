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


        if (($_SESSION["nivel"] != 1000) || (!isset($_SESSION))) {

            $urlForward = "vista/errorPHPWebPage.php";

            require $urlForward;
        } else {

            if (isset($_REQUEST['nums'])) {
                $urlForward = "vista/errorPHPWebPage.php";
                require $urlForward;
            } else {

                if (isset($_SESSION['comprobador'])) {
                    $_SESSION["comprobador"] = 1;
                } else {
                    $opcion = $_SESSION["comprobador"];

                    switch ($opcion) {

                        case 1:
                            if (nums == "11") {
                                $_SESSION["comprobador"] = 2;

                                $urlForward = "vista/index.php";
                                require $urlForward;
                            } else {
                                $urlForward = "vista/errorPHPWebPage.php";
                                require $urlForward;
                            }
                            ;
                            break;

                        case 2:
                            if (nums == "22") {
                                $_SESSION["comprobador"] = 3;
                                require $urlForward;
                                $urlForward = "vista/index.php";
                                require $urlForward;
                            } else {
                                $urlForward = "vista/errorPHPWebPage.php";
                                require $urlForward;
                            }
                            ;
                            break;

                        case 3:
                            if (nums == "33") {
                                unset($_SESSION["comprobador"]); //remover atributo comprobador de la session
                                $_SESSION["nivel"] = 1100;
                                require $urlForward;
                                $urlForward = "vista/index.php";
                                require $urlForward;
                            } else {
                                $urlForward = "vista/errorPHPWebPage.php";
                                require $urlForward;
                            }
                            ;
                            break;

                        default:
                            $urlForward = "vista/errorPHPWebPage.php";
                            require $urlForward;
                            break;
                    }
                }
            }
        }
    }

}

// String paginaDestino = Constantes.PAGINA_INDEX;
//        String nums = request.getParameter("nums");
//
//        //Filto comprueba que se ha pasasdo el nivel 1 y que no se ha accedido directamente a este Nivel sin pasar por el 1
//        if ((request.getSession().getAttribute(Constantes.NIVEL) == null)
//                || !request.getSession().getAttribute(Constantes.NIVEL).equals(1000)) {
//
//            paginaDestino = Constantes.PAGINA_ERROR;
//            request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//        } else {
//            if (nums == null) {
//
//                paginaDestino = Constantes.PAGINA_ERROR;
//                request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//            } else {
//                //Atributo temporal de la sesion para que en cada peticion pida y compruebe un parametro
//                if (request.getSession().getAttribute(Constantes.COMPROBADOR) == null) {
//
//                    request.getSession().setAttribute(Constantes.COMPROBADOR, (Integer) 1);
//                }
//            }
//
//            Integer option = (Integer) request.getSession().getAttribute(Constantes.COMPROBADOR);
//
//            switch (option) {
//
//                case 1:
//
//                    if (nums.equals(Constantes.PWD2_1)) {
//
//                        request.setAttribute(Constantes.MSG_INFO, "Nivel2: Introduce el segundo numero");
//                        request.getSession().setAttribute(Constantes.COMPROBADOR, (Integer) 2);
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//                    } else {
//
//                        paginaDestino = Constantes.PAGINA_ERROR;
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//                    }
//
//                    break;
//
//                case 2:
//
//                    if (nums.equals(Constantes.PWD2_2)) {
//
//                        request.setAttribute(Constantes.MSG_INFO, "Nivel2: Introduce el tercer numero");
//                        request.getSession().setAttribute(Constantes.COMPROBADOR, (Integer) 3);
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//                    } else {
//
//                        paginaDestino = Constantes.PAGINA_ERROR;
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//                    }
//
//                    break;
//
//                case 3:
//
//                    if (nums.equals(Constantes.PWD2_3)) {
//
//                        request.getSession().setAttribute(Constantes.NIVEL, (Integer) 1110);
//                        //Al completar el nivel eliminamos el atributo temporal COMPROBADOR de la session
//                        request.getSession().removeAttribute(Constantes.COMPROBADOR);
//                        request.setAttribute(Constantes.MSG_INFO, "Nivel 2 pasado");
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//
//                    } else {
//
//                        paginaDestino = Constantes.PAGINA_ERROR;
//                        request.getRequestDispatcher(paginaDestino).forward(request, response);
//                    }
//
//                    break;
//
//                default:
//
//                    paginaDestino = Constantes.PAGINA_ERROR;
//                    request.getRequestDispatcher(paginaDestino).forward(request, response);
//                    break;
//            }
//
//        }
//    }
?>