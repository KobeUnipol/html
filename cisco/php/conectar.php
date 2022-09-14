<?php
$dbservidor ='localhost';
$dbusuario ='root';
$dbpass ='cisco123';

 $conexion = mysqli_connect("$dbservidor","$dbusuario","$dbpass"); 
 if (!$conexion){
    die("fallo la conexion" . mysql_error());
 }


 $seleccionar_bd = mysql_select_db("cisco ", $conexion);
 if (!$seleccionar_bd){
    die("fallo la conexion" . mysql_error());
 }

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];

 $insertar = mysql_query("INSERT INTO users2 (name, email, username, password, gender, phone, birthday) VALUES ('$name' , '$email' , '$username' , '$password' , '$gender' , '$phone' ,'$birthday')");
 if (!$insertar){
    die("fallo la conexion" . mysql_error());
 }
 mysqli_close($conexion)

?>