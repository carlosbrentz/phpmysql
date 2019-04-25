
<table class="table table-hover table-striped" id="cursos">
  <thead>
  <tr>
  	  <th>Nome Curso</th>
  	  <th>Carga Horária</th>
  </tr>	 
  </thead> 
  <tbody>
  	  <?php 
  	     $query = "select * from cursos ";
         $consulta_curso = mysqli_query($conexao, $query);
         while ($linha = mysqli_fetch_array($consulta_curso)) { 
             echo '<tr><td><a href="?pagina=info_curso&curso='.$linha['id_curso'].'">'.$linha['nome_curso'].'</td>';
             echo '<td>'.$linha['carga_horaria'].'</td></tr>';
       } 
      ?>
   </tbody>
</table>  
<br><br>	  
