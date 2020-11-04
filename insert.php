<?php 
$connect = mysqli_connect("127.0.0.1","root","","phpproject"); 
$zapros_vstavit = "INSERT INTO items (title,descrip,img,price) VALUES(' " . $_GET["title"] . "', '" . $_GET["descrip"] . "', '" . $_GET["img"] . "', '" . $_GET["price"] . "')";
$zapros_new = mysqli_query($connect,$zapros_vstavit);
header("Location: index.php")
 ?>