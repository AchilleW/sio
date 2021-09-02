<div class="project-container container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $title ?></h1>
            <p class="lead"></p>
        </div>
    </div>
			
<?php
	$objet = array(
		'name'          => 'objet',
        'id'            => 'objet',
        'placeholder'   => 'objet de notre formulaire'
    );
	$optionsObjet = array();
    for ($i = 1; $i <= $nb_objets; $i++) {
        $id_objet = $objets["Objet$i"]->id_objet;
      $optionsObjet[$id_objet] = $objets["Objet$i"]->libelle_objet;
		
    }
	
?> 
 <div class="jumbotron jumbotron-fluid">
<!--  formulaire de contact  -->
 <form action="<?= base_url().'C_Contact/add_message' ?>" method="POST" role="form">

<center>
	<!-- Tableau de 2 colonnes / 7 lignes -->
		<table>
			<!-- 1ère ligne : titre -->
			<p>
			<tr><td align='center 'colspan='2'> Choisir son sujet et envoyez votre message ! </td><td></td></tr>
			</p>
			<!-- lignes 2 à 6 : saisies -->

	

 			<li>
				<label>Identification : <span class="obligatoire"></span><br></label>
				<input type="text" name="nom_Message" class="endeux" placeholder="Nom"/>
				<input type="text" name="prenom_Message" class="endeux" placeholder="Prénom"/>
			</li> 
			<li>     
			  <label>E-mail <span class="obligatoire"></span></label>
			   <input type="email" name="mail_Message" class="champs-long" placeholder="E-mail"//>
			</li> 
			<li>  
			  <label>Sujet</label>

				<div class="form-group">
                    <label for="">Objet:</label>
                    <?php echo form_dropdown("id_objet", $optionsObjet); ?>
                </div>

			 
			</li> 
			<li>  
			   <label>Votre message<span class="obligatoire"></span></label>
			   <textarea name="contenu_Message" id="champs5" class="champs-long champs-textarea" placeholder="Votre message"/></textarea>
			  
			</li> 	  
			<p>
			<button>Envoyer votre message</button>
			</p>
			<div>

			</div>
		</table>
        <!-- 6ème ligne bouton de validation -->
		</center>
	</form>	
</div>
</div>

