<?php 

 include 'db.php';

 $id_aluno  = $_POST['id_aluno'];
 $nome_aluno = $_POST['nome_aluno'];
 $data_nascimento = $_POST['data_nascimento'];

 $query = "update alunos set nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento' where id_aluno = $id_aluno";

 $res  = mysqli_query($conexao, $query);


 header('location: index.php?pagina=alunos');


 ?>