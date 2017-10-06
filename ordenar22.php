<?php

$cadena=$_GET['num'];
$a = explode(" ", $cadena);
print_r($a);  echo "<br/>";
        
 print_r("Ordenando");
 
function ordenar($a) {
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a); $j++) {
            if ($a[$i] < $a[$j]) {
                $var = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $var;
            }
        }
    }
    /*return print_r(array_values($a));*/
    return  $a; 
    /*return implode(', ', $a);*/
}
  
$b=ordenar($a); 
print_r($b);
echo "<br/>";

function media($a){
    $var=0;
    for ($i=0; $i< count($a); $i++){
        $var=$var+$a[$i];
        
        
    }
    return print_r('la media es: ' . ($var/$i));
}
media($a);  echo "<br/>";

function suma($a){
    $var=0;
    for ($i=0; $i< count($a); $i++){
        $var=$var+$a[$i]; 
        
    }
    return print_r('la suma total es: ' . ($var));
}
suma($a);  echo "<br/>";

echo "el numero menor es" . ' ' . $b[0]  . " y el numero mayor es " . $b[count($b)-1]; 
?>
