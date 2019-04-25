<?php 

 session_start();
  
 include 'db.php';

 include 'header.php';

 if (isset($_SESSION['usuario'])){

		 if (isset($_GET['pagina'])){

		 	$pagina = $_GET['pagina'];

		 } else{
            if (isset($_SESSION['admin']) and $_SESSION['admin'] == 1){ 
		 	  $pagina = 'cursos';
		    }else{
		 	   $pagina = 'nossoscursos';
		    }
		 }   
}else{

	$pagina = 'home';
}		 
 
 switch ($pagina) {
 	case 'cursos':
 		include 'views/cursos.php';
 		break;
 	case 'alunos':
 		include 'views/alunos.php';
 		break;
 	case 'matriculas':
 		include 'views/matriculas.php';
 		break;
 	case 'usuarios':
 		include 'views/usuarios.php';
 		break;
 	case 'nossoscursos':
 		include 'views/nossoscursos.php';
 		break;
    case 'info_curso':
 		include 'views/info_curso.php';
 		break; 		
 	case 'inserir_curso':
 		include 'views/inserir_curso.php';
 		break;
 	case 'inserir_aluno':
 		include 'views/inserir_aluno.php';
 		break;
 	case 'inserir_matricula':
 		include 'views/inserir_matricula.php';
 		break;
    case 'inserir_usuario':
 		include 'views/inserir_usuario.php';
 		break; 		
 	default:
 		include 'views/home.php';
 		break;
 }

 include 'footer.php';

 ?>