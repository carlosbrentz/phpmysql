<?php 

 include 'db.php';

 $usuario = $_POST['usuario'];
 $senha = md5($_POST['senha']);
 $admin = $_POST['admin'];
 if ($admin == "on") {
 	$admin = 1;
 } else{
 	$admin = 0;
 } 

 $query = "insert into usuarios(usuario, senha, administrador) values('$usuario', '$senha', $admin)";

 mysqli_query($conexao, $query);

 header('location: index.php?pagina=usuarios');
 ?>