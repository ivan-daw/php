<?php
require_once '..\config\Config.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../controller/Nivel1.php';

$controller = new Nivel1();


//call_user_func( array( $controller, "Index" ) );
$controller->index();