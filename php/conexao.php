<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$mysqli = new mysqli("localhost","root","","clientes");
$res = mysqli_query($mysqli, "INSERT INTO `cliente` (nome, email) values('$nome','$email')");
header('location: ../index.php');
?>
