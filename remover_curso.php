<?php 

 include 'db.php';

 $id_curso = $_GET['id_curso'];

 $query = "delete from cursos where id_curso = $id_curso";

 mysqli_query($conexao, $query);

 header('location: index.php?pagina=cursos');


 ?>