<?php include("conf.php");

try{
   $conn = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpass);
}catch(Exception $e){
    echo "Error de conexion con la base de datos: " . $e->getMessage();
}
?>