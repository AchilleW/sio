<div class="project-container container">
<?php
	    $optionsCompetence = array();
    for ($i = 1; $i <= $nb_competences; $i++) {
        $id = $competences["Competence$i"]->id_comp;
       
    }
?>  
<div class="jumbotron jumbotron-fluid">		
<div class="col ">	
			
            <form action="<?= base_url().'C_Competence/check_competence' ?>" method="POST" role="form">
                <legend>Competences par projet</legend>

               				 <div class="form-group">
                    <label for="">Competences:</label>

				
       <table border="2" cellpadding="15">
          <thead>
             <tr class="btn-primary">
                <th></th>
                <th>id_competence</th>
				    <th>libelle_competence</th>
						    <th>description</th>
                <th>id_projet</th>
				   <th>nom_projet</th>
				<th></th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($competences as $competence) { ?>
              <tr>
                <td>
                
				   
                </td>
               
                <td><?php echo $competence->id_comp; ?></td>
                <td><?php echo $competence->libelle_comp; ?></td>
				<td><?php echo $competence->description; ?></td>
                <td><?php echo $projet->id_projet; ?></td>
				<td><?php echo $projet->nom_projet; ?></td>
		
           <?php $i++; } ?>
        
          </tbody>
        </table>

                </div>
            </form>			
		</div>			
	</div>	
</div>

