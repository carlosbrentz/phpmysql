
<table class="table table-striped table-hover" id="alunos">
  <thead>
  <tr>
  	  <th>Nome Usuário</th>
  	  <th>Administrador</th>
      <th>Remover</th>
  </tr>	 
  </thead> 
  <tbody>
  	  <?php 
  	    $query = "select * from usuarios";
         $consulta_usuarios = mysqli_query($conexao, $query);
         while ($linha = mysqli_fetch_array($consulta_usuarios)) { 
        echo '<tr><td><a href="?pagina=inserir_usuario&editar='.$linha['id'].'">'.$linha['usuario'].'</td>';
        $check = "";
        if ($linha['administrador'] == 1) $check = "checked"; 
        echo '<td><input type="checkbox"'.' '.$check.' disabled></td>';
        echo '<td><a href="remover_usuario.php?id='.$linha['id'].'">
          <span style="color:Tomato;"</span>
          <i class="fas fa-trash-alt">
          </i></a></td></tr>';
       } 
      ?>
  </tbody>      
</table>  	
<br><br>
<a class="btn btn-primary" href="?pagina=inserir_usuario">Inserir Usuário</a>