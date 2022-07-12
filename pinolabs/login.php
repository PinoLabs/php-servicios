<?php include("cn.php"); 


$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM test WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
      echo "<script> alert(' Acceso Exitoso! ');window.location= 'inicio.php' </script>";
}
else if ($nr == 0) 
{
	
	echo "<script> alert('Error');window.location= 'index.html' </script>";
}
	

$conn->close();

?>