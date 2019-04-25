<?php 

 include 'db.php';

 $id_curso  = $_POST['id_curso'];
 $nome_curso = $_POST['nome_curso'];
 $carga_horaria = $_POST['carga_horaria'];
 $info_curso = $_POST['info_curso'];

 $query = "update cursos set nome_curso = '$nome_curso', carga_horaria = $carga_horaria, info_curso = '$info_curso' where id_curso = $id_curso";

 $res  = mysqli_query($conexao, $query);


 header('location: index.php?pagina=cursos');


 ?>