<table class="table table-striped table-hover" id="alunos">
  <thead>
  <tr>
  	  <th>Nome Aluno</th>
  	  <th>Data Nascimento</th>
      <th align="center">Remover</th>
  </tr>	 
  </thead>
  <tbody>
  	  <?php 
  	    $query = "select * from alunos ";
         $consulta_aluno = mysqli_query($conexao, $query);
         while ($linha = mysqli_fetch_array($consulta_aluno)) { 
        echo '<tr><td><a href="?pagina=inserir_aluno&editar='.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</td>';
        echo '<td>'.date('d/m/Y', strtotime($linha['data_nascimento'])).'</td>';
        echo '<td><a href="remover_aluno.php?id_aluno='.$linha['id_aluno'].'">
              <span style="color:Tomato;"</span>
              <i class="fas fa-user-times"></i>
              </a>
              </td></tr>';
       } 
      ?>
  </tbody>     
</table>  	
<br><br>
<a  class="btn btn-primary" href="?pagina=inserir_aluno">Inserir novo Aluno</a> 