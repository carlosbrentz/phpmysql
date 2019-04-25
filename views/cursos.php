
<table class="table table-hover table-striped" id="cursos">
  <thead>
  <tr>
  	  <th>Nome Curso</th>
  	  <th>Carga Horária</th>
      <th>Remover Curso</th>
  </tr>	 
  </thead> 
  <tbody>
  	  <?php 
  	     $query = "select * from cursos ";
         $consulta_curso = mysqli_query($conexao, $query);
         while ($linha = mysqli_fetch_array($consulta_curso)) { 
             echo '<tr><td><a href="?pagina=inserir_curso&editar='.$linha['id_curso'].'">'.$linha['nome_curso'].'</td>';
             echo '<td>'.$linha['carga_horaria'].'</td>';
             echo '<td><a href="remover_curso.php?id_curso='.$linha['id_curso'].'">
             <span style="color:Tomato;"</span>
             <i class="fas fa-trash-alt"></i>
             </a>
             </td></tr>';
       } 
      ?>
   </tbody>
</table>  
<br><br>	  
<a class="btn btn-primary" href="?pagina=inserir_curso">Inserir novo curso</a>