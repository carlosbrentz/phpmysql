<?php 

 include 'db.php';

 $id_aluno = $_POST['id_aluno'];
 $id_curso = $_POST['id_curso'];
  

 $query = "insert into alunos_cursos(id_aluno, id_curso) values($id_aluno, $id_curso)";
 
 mysqli_query($conexao, $query);

 header('location: index.php?pagina=matriculas');
 ?>