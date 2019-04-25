<?php if (!isset($_GET['editar'])){ ?>
	<h1>Inserir novo Usuário</h1>
	<form method="POST" action="processa_usuario.php">
		<br>
		<div class="form-group">
		   <label class="badge badge-secondary">Nome Usuário:</label>
		   <input type="text" class="form-control" name="usuario" placeholder="Insira o nome do Usuário">
		</div>
		<div class="form-group">
		  <label class="badge badge-secondary">Senha:</label>
		  <input type="password" class="form-control" name="senha" placeholder="Insira a Senha">
        </div> 
        <div class="form-group">
  		  <div>
		     <input type="checkbox" name="admin">
		     <label class="badge badge-secondary">Administrador:</label>
          </div> 
        </div>  
        <div class="form-group">
	       <button type="submit"  class="btn btn-default">Inserir Usuário
	       </button> 
	    </div>     	
	</form>	
<?php } else { 
	  $query = "select * from usuarios where id = " . $_GET['editar'];
	  $consulta_usuario = mysqli_query($conexao, $query);
	  while ($linha = mysqli_fetch_array($consulta_usuario)) { ?>
		<h1>Editar Usuário</h1>	
		<form method="POST" action="editar_usuario.php">
			<input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
			<br>
			<div class="form-group">
				  <label class="badge badge-secondary">Nome Usuário:</label>
				  <input type="text" name="usuario" class="form-control"  placeholder="Insira o nome do Usuário" value="<?php echo $linha['usuario']; ?>">
			 </div>
			 <div class="form-group">
			      <label class="badge badge-secondary">Senha:</label>
			      <input type="password" name="senha" placeholder="Insira a Senha" class="form-control">
			 </div>
		 	 <div class="form-group">
		 	 	<div>
				  <input type="checkbox"name="admin"
				   <?php if ($linha['administrador'] == 1) ?> checked > 
 			      <label class="badge badge-secondary">Administrador:</label>
                   
				</div>  
		     </div> 

			 <div class="form-group">
			   <button type="submit"  class="btn btn-default">Alterar Usuário</button>
			 </div>
		</form>	
	<?php } ?>
<?php } ?>