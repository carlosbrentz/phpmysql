<?php if (!isset($_GET['editar'])){ ?>
	<h1>Inserir novo Aluno</h1>
	<form method="POST" action="processa_aluno.php">
		<br>
		<div class="form-group">
		   <label class="badge badge-secondary">Nome Aluno:</label>
		   <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome do Aluno">
		</div>
		<div class="form-group">
		  <label class="badge badge-secondary">Data de Nascimento:</label>
		  <input type="date" class="form-control" name="data_nascimento" placeholder="Insira a Data de Nascimento">
        </div> 
        <div class="form-group">
	       <button type="submit"  class="btn btn-default">Inserir Aluno
	       </button> 
	    </div>     	
	</form>	
<?php } else { 
	  $query = "select * from alunos where id_aluno = " . $_GET['editar'];
	  $consulta_aluno = mysqli_query($conexao, $query);
	  while ($linha = mysqli_fetch_array($consulta_aluno)) { ?>
		<h1>Editar aluno</h1>	
		<form method="POST" action="editar_aluno.php">
			<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
			<br>
			<div class="form-group">
				  <label class="badge badge-secondary">Nome Aluno:</label>
				  <input type="text" name="nome_aluno" class="form-control"  placeholder="Insira o nome do Aluno" value="<?php echo $linha['nome_aluno']; ?>">
			 </div>
			 <div class="form-group">
			      <label class="badge badge-secondary">Data de Nascimento</label>
			      <input type="date" name="data_nascimento" placeholder="Insira a Data de Nascimento" class="form-control" value="<?php echo $linha['data_nascimento']; ?>">
			 </div>
			 <div class="form-group">
			   <button type="submit"  class="btn btn-default">Alterar aluno</button>
			 </div>
		</form>	
	<?php } ?>
<?php } ?>