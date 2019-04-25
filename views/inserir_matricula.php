<h1>Inserir Nova Matrícula</h1>
<form method="post" action="processa_matricula.php" >
  <br>	
  <label class="badge badge-secondary">Selecione o Aluno</label>
  <select name="id_aluno" class="form-control">	
  	<option> </option>
  	<?php 
      $query = "select * from alunos ";
      $consulta_alunos = mysqli_query($conexao, $query);
      while ($linha = mysqli_fetch_array($consulta_alunos)){
        echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
       } 
    ?>
    </select>   
<br><br>
    <label class="badge badge-secondary">Selecione o Curso</label>
    <select name="id_curso" class="form-control">	
      <option>  
      </option>
  	  <?php 
        $query = "select * from cursos ";
        $consulta_cursos = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($consulta_cursos)){
        echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
       } 
    ?>
    </select> 
    <br><br>  
    <input type="submit"  class="btn btn-default" value="Matricular aluno no curso">

</form>
