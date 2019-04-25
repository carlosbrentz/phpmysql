<?php 

 include 'db.php';

 $id  = $_POST['id'];
 $usuario = $_POST['usuario'];
 $admin = $_POST['admin'];
 $senha = md5($_POST['senha']);

if ($admin == "on") {
 	$admin = 1;
 } else{
 	$admin = 0;
 } 

 $query = "update usuarios set usuario = '$usuario', senha = '$senha', administrador = $admin  where id = $id";

 $res  = mysqli_query($conexao, $query);


 header('location: index.php?pagina=usuarios');


 ?>