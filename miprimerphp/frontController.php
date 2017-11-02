<?php

require_once 'config\Config.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once "src\controller\Nivel1.php";
//require_once "src\controller\Nivel2.php";
//require_once "src\controller\Nivel3.php";

if (!empty($_REQUEST['url'])){
$url = $_REQUEST['url'];

       switch (strtolower($url)) {

                        case 'nivel1':
                            $controller = new Nivel1();
                            break;
                        case 'nivel2':
                            $controller = new Nivel2();
                            break;
                        case 'nivel3':
                            $controller = new Nivel3();
                            break;
                        default:
                            echo 'url invalida';
                            break;
       }
       
     //  if (!empty($_SESSION['nivel'])){
       if (!empty($_SESSION['nivel']) && $_SESSION['nivel']==1111) {
           echo 'LA CAJA ESTA ABIERTA';
       }
       $controller->index();
}
  
//
//if ($clase == "nivel1")
//{
//$controller = new Nivel1();
//}
//else
//{
//   $controller = new Nivel2(); 
//}
//

//call_user_func( array( $controller, "Index" ) );
