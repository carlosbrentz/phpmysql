<?php 

#mysqli

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
//$usuario  = "cursophpmysql";
//$senha    = "Curso@@@2019";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

// or die("Erro ao conectar");

#Criando tabelas alunos, cursos e alunos_cursos

/*$query = "Create table cursos (
   id_curso int not null auto_increment primary key,
   nome_curso varchar(255) not null,
   carga_horaria int not null
)";

$executar = mysqli_query($conexao, $query);

if ($executar) {

	echo "Executado com sucesso (cursos)"."<br>";
}else{

	echo "Falha ao executar (cursos)"."<br>";
}

$query = "Create table alunos (
   id_aluno int not null auto_increment primary key,
   nome_aluno varchar(255) not null,
   data_nascimento date not null
)";

$executar = mysqli_query($conexao, $query);
if ($executar) {

	echo "Executado com sucesso (alunos)"."<br>";
}else{

	echo "Falha ao executar (alunos)"."<br>";
}
$query = "Create table alunos_cursos (
   id_aluno_curso int not null auto_increment primary key,
   id_aluno int not null,
   id_curso int not null
)";

$executar = mysqli_query($conexao, $query);
if ($executar) {

	echo "Executado com sucesso (alunos_cursos)"."<br>";
}else{

	echo "Falha ao executar (alunos_cursos)"."<br>";
}
*/ 

# Inserir dados nas tabelas

//$query = "insert into alunos(nome_aluno, data_nascimento) values ('Maria', '01-04-1991')";


//$query = "insert into cursos(nome_curso, carga_horaria) values ('PHP E MYSQL', 10)";

/*if (mysqli_query($conexao, "insert into alunos(nome_aluno, data_nascimento) values ('Carlos', '1962-01-17')")){

	echo "ok";
}else{
	echo "nok";
}*/

//$query = "insert into alunos_cursos(id_aluno, id_curso) values (2, 1)";

//$executar = mysqli_query($conexao, $query);

/*if (mysqli_query($conexao, "update alunos set nome_aluno='Carlos Brentz' where id_aluno = 3")){

	echo "ok";
}else{
	echo "nok";
}*/
echo '<table border=1 >
      <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
      </tr>';
$consulta = mysqli_query($conexao, "select * from alunos");

while ($linha = mysqli_fetch_array($consulta)){

	echo '<tr>';
	echo '<td>' . $linha['id_aluno']. '</td>';
	echo '<td>' . $linha['nome_aluno']. '</td>';
	echo '<td>' . $linha['data_nascimento']. '</td>';
	echo '</tr>';
}
foreach ($consulta as $key => $value) {
	echo '<tr>';
	echo '<td>' . $value['id_aluno']. '</td>';
	echo '<td>' . $value['nome_aluno']. '</td>';
	echo '<td>' . $value['data_nascimento']. '</td>';
	echo '</tr>';
}
echo '</table>';

?>