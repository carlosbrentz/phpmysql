<?php 

 include 'db.php';

 $id_usuario = $_GET['id'];
 

 $query = "delete from usuarios where id = $id_usuario";

 mysqli_query($conexao, $query);

 header('location: index.php?pagina=usuarios');


 ?>