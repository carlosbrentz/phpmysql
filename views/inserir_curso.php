<?php if (!isset($_GET['editar'])){ ?>
 
<h1>Inserir novo curso</h1>
<form method="POST" action="processa_curso.php">
	<br>
		<div class="form-group">
	      <label class="badge badge-secondary">Nome Curso:</label>
	      <input type="text" name="nome_curso" placeholder="Insira o nome do curso" class="form-control">
	    </div>
	    <div class="form-group">
	      <label class="badge badge-secondary">Carga Horária:</label>
	      <input type="text" name="carga_horaria" placeholder="Insira a carga horária" class="form-control">
	    </div>
	    <div class="form-group">
	      <label class="badge badge-secondary">Descrição do Curso:</label>
	      <textarea  name="info_curso" class="form-control is-invalid" rows="5" placeholder="Insira a descrição do curso"></textarea>
	    </div>
	    <div class="form-group">
	     <button type="submit" class="btn btn-default">Inserir curso</button>
	    </div>
</form>	
<?php } else { 
	  $query = "select * from cursos where id_curso = " . $_GET['editar'];
	  $consulta_curso = mysqli_query($conexao, $query);
	  while ($linha = mysqli_fetch_array($consulta_curso)) { ?>
		<h1>Editar curso</h1>
    	<form method="POST" action="editar_curso.php">
    		<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
			<br>
			<div class="form-group">
			  <label class="badge badge-secondary">Nome do Curso:</label>
			  <input type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>" class="form-control">
			</div>
			<div class="form-group">
               <label class="badge badge-secondary">Carga Horária:</label>
			   <input type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['carga_horaria']; ?>"class="form-control">
			</div>
			 <div class="form-group">
			   <label class="badge badge-secondary">Descrição do Curso:</label>
			   <textarea  name="info_curso" class="form-control is-invalid" rows="5" placeholder="Insira a descrição do curso"><?php echo $linha['info_curso'] ?></textarea>
		    </div>
			 <div class="form-group">
   			   <button input type="submit" class="btn btn-default">Alterar Curso</button>
			</div>
   		</form>	
	<?php } ?>
<?php } ?>