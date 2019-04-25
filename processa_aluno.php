<?php 

 include 'db.php';

 $nome_aluno = $_POST['nome_aluno'];
 $data_nascimento = $_POST['data_nascimento'];
  
 $query = "insert into alunos(nome_aluno, data_nascimento) values('$nome_aluno', '$data_nascimento')";
 mysqli_query($conexao, $query);

 header('location: index.php?pagina=alunos');
 ?>