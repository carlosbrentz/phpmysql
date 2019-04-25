
<h1 style="text-align: :center"> Bem vindos à Dog Cursos</h1>
<?php  if (!isset($_SESSION['usuario'])) { ?>
		<form method="post" action="login.php">
		    <div class="container"> 
		      <label class="badge badge-secondary">Usuário:</label>
			  <input type="text" name="usuario" placeholder="Digite o Usuário" class="form-control">
			  <br>
		      <label class="badge badge-secondary">Senha:</label>
			  <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
		      <br><br>
			  <button type="submit" class="btn brn-default">Entrar
		      </button>	 
		    </div>   	
		</form>
		<br>
		<?php if (isset($_GET['erro'])){?>
			<div class="alert alert-danger" role="alert">
				Usuário e/ou senha inválidos!
			</div>	
		<?php } ?>	
<?php } ?>



