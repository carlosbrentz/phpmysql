<!DOCTYPE html>
<html>
<head>
  <title> DogCursos</title> 
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
	<header>
		<div class="container">
		  <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
		  <div id="menu">
            <?php 
              if (isset($_SESSION['admin']) and $_SESSION['admin'] == 1){?>
				    <a href="?pagina=cursos">Cursos</a> 	
				    <a href="?pagina=alunos">Alunos</a>
				    <a href="?pagina=matriculas">Matrículas</a>
				    <a href="?pagina=usuarios">Usuários</a>
			<?php } else{ ?>
				    <a href="?pagina=nossoscursos">Nossos Cursos</a> 
		    <?php } if (isset($_SESSION['usuario'])) { ?>
		      <a href="logout.php">
		        <?php echo $_SESSION['usuario']; ?>
                  <i class="fas fa-sign-out-alt"></i>
                  &nbsp;	
		     </a>
		    <?php } ?> 
		  </div>
		</div>  
	</header>
	
	<div id="conteudo" class="container">	
