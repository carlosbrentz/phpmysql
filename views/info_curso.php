  	  <h2> Descrição do Curso</h2>
      <br><br>
      <?php 
  	     $query = "select * from cursos where id_curso = " .$_GET['curso'];
         $consulta_curso = mysqli_query($conexao, $query);
         $linha = mysqli_fetch_array($consulta_curso); 
         echo '
           <div class="form-group">  
            <label class="badge badge-light">Curso:</label>'.$linha['nome_curso'].'
           </div>
           <div class="form-group"> 
              <label class="badge badge-light">Carga Horária:</label>'. $linha['carga_horaria'].' horas
           </div>
           <div class="form-group"> 
              <p>'. $linha['info_curso'].'</p>
           </div>' ; 
      ?>
<br><br>	  
