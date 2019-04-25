
<table class="table table-striped table-hover" id="alunos">
  <thead>
  <tr>
  	  <th>Nome Aluno</th>
  	  <th>Nome Curso</th>
      <th>Remover</th>
  </tr>	 
  </thead> 
  <tbody>
  	  <?php 
  	    $query = "select id_aluno_curso, alunos.nome_aluno, cursos.nome_curso from  alunos, cursos, alunos_cursos 
          where alunos_cursos.id_aluno = alunos.id_aluno
            and alunos_cursos.id_curso = cursos.id_curso";
         $consulta_matriculas = mysqli_query($conexao, $query);
         while ($linha = mysqli_fetch_array($consulta_matriculas)) { 
        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'.$linha['nome_curso'].'</td>';
        echo '<td><a href="remover_matricula.php?id_aluno_curso='.$linha['id_aluno_curso'].'">
          <span style="color:Tomato;"</span>
          <i class="fas fa-trash-alt">
          </i></a></td></tr>';
       } 
      ?>
  </tbody>      
</table>  	
<br><br>
<a class="btn btn-primary" href="?pagina=inserir_matricula">Inserir Matrícula</a>