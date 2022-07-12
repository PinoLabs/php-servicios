<?php include("cn.php"); 

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$correo = $_POST["txtcorreo"];


$insert = "INSERT INTO test (usuario, password, correo) VALUES ('$nombre', '$pass', '$correo')";
if (mysqli_query($conn, $insert)) {
      
      echo "usuario creado con exito!";
      header("Location: index.html");
} else {
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
    