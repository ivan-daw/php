<!DOCTYPE*/ html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h2>Mostrando los parametros pasados con su respectivo color</h2>
        <?php
        foreach ($_REQUEST as $key => $val) {
            
            ?> <h1 style="color:<?php $key ?>"> 
                <?php
                echo htmlspecialchars($key . "=" . $val);

                ?> </h1>
            <?php
        }
        /* foreach ($_REQUEST as $val) {
          echo htmlspecialchars("=" . $val);
          } */

        // put your code here
        ?>
    </body>
</html>
