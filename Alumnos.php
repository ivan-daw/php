<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <style>
            table {border: 3px solid black}
            td {border: 1px solid black}
            </style>
    </head>
    <body>

        <?php
       

// Create connection
        function Conectar(){
        $servername = "db4free.net:3307";
        $username = "oscarnovillo";
        $password = "c557ef";
        $database = "clasesdaw";
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Check connection
                if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
        }
$conn=Conectar();

        // listar
        $sql = "SELECT *
    FROM `ALUMNOS`";




        if (!$result = $conn->query($sql)) {
            die('There was an error running the query [' . $conn->error . ']');
        }

        echo 'Total results: ' . $result->num_rows;
//onclick="cargartest('$prueba')" >' cart
        echo '<table>';
        while ($row = $result->fetch_assoc()) {
          $nombre = $row['NOMBRE'];
          $id = $row ['ID'];
          $fecha = $row['FECHA_NACIMIENTO']; 
          $mayor = $row['MAYOR_EDAD'] ;
          
         
            echo '<tr><td>' .
                "<input type=button value=" . $id . " onclick=cargarAlumno('$id','$nombre','$fecha','$mayor') >"
                                                       . '</td><td>' .$nombre . '</td><td>' . $fecha . '</td><td> <input type="checkbox" id="mayor_edad" value="'. $mayor . '" checked> </td>';
            '</td><tr>';
   
        }echo '</table>';

        $result->free();
/*
        // alumno by id
        
        $statement = $conn->prepare("SELECT * FROM ALUMNOS WHERE NOMBRE LIKE ?");
        $name = "%ERASTO%";
        $statement->bind_param('s', $name);
         $statement->execute();
         
         
        $resultado = $statement->get_result();
        while ($row = $resultado->fetch_assoc()) {
            echo $row['NOMBRE'] . '<br />';
        }
  */      
        // insertan
        function Insertar() {
$conn=Conectar();            
        $statement = $conn->prepare("Insert INTO ALUMNOS (nombre, fecha_nacimiento, mayor_edad) Values(?,?,?)");
        $name = "";
         $date = "";
         $legal = "";
        $statement->bind_param('sss', $name, $date, $legal);
         $statement->execute();
         
         
        $resultado = $statement->get_result();
        while ($row = $resultado->fetch_assoc()) {
            echo $row['NOMBRE'] . '<br />';
        }
     }
     
      function Update() {
$conn=Conectar();            


        $statement = $conn->prepare("UPDATE alumnos set nombre=? fecha_nacimiento=? mayor_edad=? Values(?,?,?)");
        $name = "";
         $date = "";
         $legal = "";
        $statement->bind_param('sss', $name, $date, $legal);
         $statement->execute();
         
         if ($conn->query($statement) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}/*
        $resultado = $statement->get_result();
        while ($row = $resultado->fetch_assoc()) {
            echo $row['NOMBRE'] . '<br />';
        }*/
     }
     
      
      function Delete() {
$conn=Conectar();            
        $statement = $conn->prepare("DELETE FROM ALUMNOS where id=?");
        $id = "";
        
        $statement->bind_param('s', $id);
         $statement->execute();
         
         
       if ($conn->query($statement) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
     }
      }
     
       function Delete_especial() {
$conn=Conectar();       
$conn->autocommit(FALSE);
         $statement = $conn->prepare("DELETE FROM NOTAS where id_alumno=?");
         $id_alumno = "";
           $statement->bind_param('s', $id_alumno);
         $statement->execute();
         
            if ($conn->query($statement) === TRUE) {
   
         
        $statement = $conn->prepare("DELETE FROM ALUMNOS where id=?");
        $id = "";
         $statement->bind_param('s', $id);
         $statement->execute();
         
            if ($conn->query($statement) === TRUE) {
    echo "Record updated successfully"; $conn->autocommit(FALSE);
} 
   
     } else {echo "Error updating record: " . $conn->error;}
      
        }
     
        /*
        //conectado como
        
        $statement->bind_result($id, $nombre, $fecha, $mayor);
       
        while ($statement->fetch()) {
            echo $nombre . ' ' . $fecha . '<br />';
        }
*/
//cerrar connection

        $conn->close();
        echo "Connected successfully";
        /* <?php echo $name;?> <?php echo $fecha;?> <?php echo $mayor;?>*/
        ?>
        
        
        
        
         <form name="userDetails" id="userDetails" method="get" >
             <input type="text" id="id" name="id" value="" <!--hidden=""-->>
         <input type="text" id="name" name="name" value="">
          <input type="text"id="fecha" name="fecha" value="">
                    <input type="text" id="mayor" name="mayor" value="">
                    
                    <br>
                    <input type="button" id="listar" name="op" onclick="myFunction(id)" value="Listar" />
                      <input type="button" id="insert" name="op" onclick="myFunction(id)" value="Insertar" />
                      <input type="button" id="update" name="op" onclick="myFunction(id)" value="Update" />
                      <input type="button" id="delete" name="op" onclick="myFunction(id)" value="Borrar" />
                      
         </form>
           
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>$("input:checkbox[value=0]").attr("checked", false);
        ("input:checkbox[value=1]").attr("checked", true);
        </script>
        <script>
            

                          
            function cargarAlumno(id, nombre, fecha, mayor) {
                
                document.getElementById("id").value = id;
                document.getElementById("name").value = nombre;
                document.getElementById("fecha").value = fecha;
                document.getElementById("mayor").value = mayor;
            
            }
            
            function myFunction(id){
                this.id=id;
    document.getElementById("op").value = id;
    }
   </script>

    </body>
</html>
