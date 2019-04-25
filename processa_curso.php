<?php 

 include 'db.php';

 $nome_curso = $_POST['nome_curso'];
 $carga_horaria = $_POST['carga_horaria'];
 $info_curso = $_POST['info_curso'];

 $query = "insert into cursos(nome_curso, carga_horaria, info_curso) values('$nome_curso', $carga_horaria, '$info_curso')";
 mysqli_query($conexao, $query);

 header('location: index.php?pagina=cursos');
 ?>