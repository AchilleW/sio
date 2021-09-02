<div class="project-container container">


<div class="jumbotron jumbotron-fluid">		   
<center><h1>Gestion des données</h1></center>
<form action="<?= base_url().'C_Tableau_de_bord/logout' ?>" method="POST" role="form">
<table>
		 
			<button>Deconnexion</button>

</table>
</form>	
</div>

<!--  formulaire de contact  -->
<div class="jumbotron jumbotron-fluid">	
<div class="col ">			
	   
<form action="<?= base_url().'C_Tableau_de_bord/add_admin' ?>" method="POST" role="form">
<table>
		 <legend>Ajout admin</legend>
				<label>Nom et Prenom : <span class="obligatoire"></span><br></label>
				<input type="text" name="nom_Admin" class="endeux" placeholder="Nom"/>
				<input type="text" name="prenom_Admin" class="endeux"  placeholder="Prénom"/>	   
			    <label>Identifiant<span class="obligatoire"></span></label>
			    <input type="text" name="login_Admin" class="champs-long" placeholder="Login"//>		
			    <label>Mot de passe<span class="obligatoire"></span></label>
			    <input type="password" name="motDePasse" class="champs-long" placeholder="password"//>
  
			<p>
			<button>Ajouter un admin</button>
			</p>

</table>
</form>	
</div>
</div>

<!--  formulaire de contact  -->
<div class="jumbotron jumbotron-fluid">		
<div class="col ">			
   
<form action="<?= base_url().'C_Tableau_de_bord/add_categ' ?>" method="POST" role="form">
<table>

				  
			    <legend>Ajout de categorie</legend>
			    <label>Libelle<span class="obligatoire"></span></label>
			    <input type="text" name="libelle" class="champs-long" placeholder="Libelle"//>
  
			<p>
			<button>Ajouter une categorie</button>
			</p>

</table>
</form>	
</div>
</div>

<div class="jumbotron jumbotron-fluid">	
<div class="col ">			
	   
<form action="<?= base_url().'C_Tableau_de_bord/add_comp' ?>" method="POST" role="form">
<table>

				  
			    <legend>Ajout de competence</legend>
			    <label>Libelle de competence<span class="obligatoire"></span></label>
			    <input type="text" name="libelle_comp" class="champs-long" placeholder="Libelle"//>
				<label>Description<span class="obligatoire"></span></label>
			    <input type="text" name="description" class="champs-long" placeholder="Description"//>
  
			<p>
			<button>Ajouter une competences</button>
			</p>

</table>
</form>	
</div>
</div>

<?php



    /**
     * 
     * FORM 1 parametres
     * ADD PROJET
     */

    $nom = array(
        'name'          => 'nom',
        'id'            => 'nom',
        'placeholder'   => 'Nom du projet',
    );

   

    $description = array(
        'name'          => 'description',
        'id'            => 'description',
        'placeholder'   => 'Description du projet'
    );



    $lien = array(
        'name'          => 'lien',
        'id'            => 'lien',
        'placeholder'   => 'Lien du projet',
    );
	
	    $lien_photo = array(
        'name'          => 'lien_photo',
        'id'            => 'lien_photo',
        'placeholder'   => 'Lien de la photo du projet',
    );

    $btn = array(
        'name'          => 'btn_add',
        'id'            => 'btn_add',
        'class'         => 'btn btn-primary',
        'value'         => 'Ajouter le projet'
    );
	
	
    $options = array();
    for ($i = 1; $i <= $nb_projects; $i++) {
        $id = $projects["Project$i"]->id;
        $options[$id] = $projects["Project$i"]->nom;
    }
   
	$optionsComp = array();
    for ($i = 1; $i <= $nb_competences ; $i++) {
        $id_comp = $competences["Competence$i"]->id_comp;
      $optionsComp[$id_comp] = $competences["Competence$i"]->libelle_comp;
		
    }

	
    $btn_rem = array(
        'name'          => 'btn_rem',
        'id'            => 'btn_rem',
        'class'         => 'btn btn-primary',
        'value'         => 'Supprimer le projet'
    );
    /**
     * 
     * FORM 3 parametres
     * SET NOM
     */
    $new_nom = array(
        'name'          => 'new_nom',
        'id'            => 'new_nom',
        'placeholder'   => 'Nouveau nom du projet',
    );

    $btn_ch_nom = array(
        'name'          => 'btn_ch_nom',
        'id'            => 'btn_ch_nom',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );
     /**
     * 
     * FORM 3 parametres
     * SET DESC
     */
    $new_description = array(
        'name'          => 'new_description',
        'id'            => 'new_description',
        'placeholder'   => 'Nouvelle description du projet',
    );

    $btn_ch_description = array(
        'name'          => 'btn_ch_description',
        'id'            => 'btn_ch_description',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );
     /**
     * 
     * FORM 3 parametres
     * SET LIEN
     */
    $new_lien = array(
        'name'          => 'new_lien',
        'id'            => 'new_lien',
        'placeholder'   => 'Nouveau lien du projet',
    );

    $btn_ch_lien = array(
        'name'          => 'btn_ch_lien',
        'id'            => 'btn_ch_lien',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );

     /**
     * 
     * FORM 3 parametres
     * SET LIEN
     */
    $new_lien_photo = array(
        'name'          => 'new_lien_photo',
        'id'            => 'new_lien_photo',
        'placeholder'   => 'Nouveau lien de la photo du projet',
    );

    $btn_ch_lien_photo = array(
        'name'          => 'btn_ch_lien_photo',
        'id'            => 'btn_ch_lien_photo',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );


 /**
     * 
     * FORM 1 parametres
     * ADD NB COMPETENCES
     */
	
	$nb_competences = array(
        'id'          => 'nb_competences',
		'placeholder'   => 'Rajouter des competences',

    );

    $btnC = array(
        'name'          => 'btn_add',
        'class'         => 'btn btn-primary',
        'value'         => 'Rajouter'
    );


?> 


<div class="jumbotron jumbotron-fluid">	
<div class="col ">	 
        <!-- Formulaire d'ajout de projet -->
            <form action="<?= base_url().'C_Projet/add_a_project' ?>" method="POST" role="form">
                <legend>Ajout de projet</legend>

                <div class="form-group">
                    <label for="">Nom:</label>
                    <?php  echo form_input($nom); ?>

                </div>

                <div class="form-group">
                    <label for="">Description:</label>
                    <?php  echo form_textarea($description); ?>

                </div>

                <div class="form-group">
                    <label for="">Lien:</label>
                    <?php  echo form_input($lien); ?>

                </div>
				
				
				<div class="form-group">
                    <label for="">Lien photo :</label>
                    <?php  echo form_input($lien_photo); ?>

                </div>
				
				 <div class="form-group">
                    <label for="">Competences:</label>

				
       <table border="2" cellpadding="15">
          <thead>
             <tr class="btn-primary">
                <th></th>
                <th>Id</th>
                <th>Libelle</th>
				<th>Description</th>
       
              </tr>
          </thead>
          <tbody>
            <?php foreach ($competences as $competence) { ?>
              <tr>
                <td>
                  <input type="checkbox" name="id_comp[]" value="<?php echo $competence->id_comp; ?>"> 
				   
                </td>
               
                <td><?php echo $competence->id_comp; ?></td>
                <td><?php echo $competence->libelle_comp; ?></td>
                <td><?php echo $competence->description; ?></td>
             </tr>
           <?php $i++; } ?>
        
          </tbody>
        </table>

                </div>
	

                <?php echo form_submit($btn); ?>

            </form>
		</div>
</div>	


			<!-- Formulaire de suppression de projet -->
<div class="jumbotron jumbotron-fluid">	
<div class="col ">		   

            <form action="<?= base_url().'C_Projet/remove_a_project' ?>" method="POST" role="form">
                <legend>Suppression de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>
		

                </div>

                <?php echo form_submit($btn_rem); ?>

            </form>
</div>
</div>
			<!-- Formulaire de changement de nom de projet-->
<div class="jumbotron jumbotron-fluid">		
<div class="col ">	
            
            <form action="<?= base_url().'C_Projet/change_nom' ?>" method="POST" role="form">
                <legend>Changement nom de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>
                
                <div class="form-group">
                    <label for="">Nouveau nom:</label>
                    <?php  echo form_input($new_nom); ?>

                </div>

                <?php echo form_submit($btn_ch_nom); ?>

            </form>
</div>
</div>
			<!-- Formulaire de changement de description de projet-->		
<div class="jumbotron jumbotron-fluid">		
<div class="col ">	
           
            <form action="<?= base_url().'C_Projet/change_description' ?>" method="POST" role="form">
                <legend>Changement description de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouvelle description:</label>
                    <?php  echo form_input($new_description); ?>

                </div>



                <?php echo form_submit($btn_ch_description); ?>

            </form>
</div>
</div>
			 <!-- Formulaire de changement de description de projet-->
<div class="jumbotron jumbotron-fluid">	
<div class="col ">		
           
            <form action="<?= base_url().'C_Projet/change_lien' ?>" method="POST" role="form">
                <legend>Changement lien de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau lien:</label>
                    <?php  echo form_input($new_lien); ?>

                </div>



                <?php echo form_submit($btn_ch_lien); ?>

            </form>
</div>
</div>

		
<?php

    /**
     * 
     * FORM 1 parametres
     * ADD ARTICLE IN CATEGORIE
     */

    $titre = array(
        'name'          => 'titre',
        'id'            => 'titre',
        'placeholder'   => 'titre de notre article',
    );

    $lien = array(
        'name'          => 'lien',
        'id'            => 'lien',
        'placeholder'   => 'lien de notre article',
    );
	
    $corp = array(
        'name'          => 'corp',
        'id'            => 'corp',
        'placeholder'   => 'corp de notre article'
    );
	
	$auteur = array(
        'name'          => 'auteur',
        'id'            => 'auteur',
        'placeholder'   => 'auteur de notre article'
    );
	
	$categorie = array(
		'name'          => 'categorie',
        'id'            => 'categorie',
        'placeholder'   => 'categorie de notre article'
    );
	

    $btn = array(
        'name'          => 'btn_add',
        'id'            => 'btn_add',
        'class'         => 'btn btn-primary',
        'value'         => 'Ajouter un article'
    );

    /**
     * 
     * FORM 2 parametres
     * RM ARTICLE
     */
    $options = array();
    for ($i = 1; $i <= $nb_articles; $i++) {
        $id = $articles["Article$i"]->id;
        $options[$id] = $articles["Article$i"]->titre;
		
    }

   
	$optionsCateg = array();
    for ($i = 1; $i <= $nb_categories; $i++) {
        $id_categ = $categories["Categorie$i"]->id_categ;
      $optionsCateg[$id_categ] = $categories["Categorie$i"]->libelle;
		
    }
	
		


    $btn_rem = array(
        'name'          => 'btn_rem',
        'id'            => 'btn_rem',
        'class'         => 'btn btn-primary',
        'value'         => 'Supprimer notre article'
    );
    /**
     * 
     * FORM 3 parametres
     * SET TITRE
     */

    $new_titre = array(
        'name'          => 'new_titre',
        'id'            => 'new_titre',
        'placeholder'   => 'Nouveau titre de notre article',
    );

    $btn_ch_titre = array(
        'name'          => 'btn_ch_titre',
        'id'            => 'btn_ch_titre',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );

     /**
     * 
     * FORM 3 parametres
     * SET LIEN
     */
    $new_lien = array(
        'name'          => 'new_lien',
        'id'            => 'new_lien',
        'placeholder'   => 'Nouveau lien du projet',
    );

    $btn_ch_lien = array(
        'name'          => 'btn_ch_lien',
        'id'            => 'btn_ch_lien',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );
	
 /**
     * 
     * FORM 3 parametres
     * SET CORP
     */
    $new_corp = array(
        'name'          => 'new_corp',
        'id'            => 'new_corp',
        'placeholder'   => 'Nouveau corp de notre article',
    );

    $btn_ch_corp = array(
        'name'          => 'btn_ch_corp',
        'id'            => 'btn_ch_corp',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );

 /**
     * 
     * FORM 3 parametres
     * SET AUTEUR
     */
    $new_auteur = array(
        'name'          => 'new_auteur',
        'id'            => 'new_auteur',
        'placeholder'   => 'Nouveau auteur de notre article',
    );

    $btn_ch_auteur = array(
        'name'          => 'btn_ch_auteur',
        'id'            => 'btn_ch_auteur',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );

?> 

        <!-- Formulaire d'ajout d'un article -->

<div class="jumbotron jumbotron-fluid">
<div class="col ">	       
            <form action="<?= base_url().'C_Veille/add_a_article' ?>" method="POST" role="form">
                <legend>Ajout de l'article</legend>

                <div class="form-group">
                    <label for="">Titre:</label>
                    <?php  echo form_input($titre); ?>

                </div>

                <div class="form-group">
                    <label for="">Lien:</label>
                    <?php  echo form_input($lien); ?>
					
				</div>

                <div class="form-group">
                    <label for="">Corp:</label>
                    <?php  echo form_textarea($corp); ?>
					
				</div>
				
                <div class="form-group">
                    <label for="">Auteur:</label>
                    <?php  echo form_input($auteur); ?>
                </div>

                <div class="form-group">
                    <label for="">Categorie:</label>
                    <?php echo form_dropdown("id_categ", $optionsCateg); ?>
                </div>


                <?php echo form_submit($btn); ?>

            </form>
</div>
</div>

		            <!-- Formulaire de suppression d'un article -->

<div class="jumbotron jumbotron-fluid">		
<div class="col ">	

            <form action="<?= base_url().'C_Veille/remove_a_article' ?>" method="POST" role="form">
                <legend>Suppression de l'article</legend>

                <div class="form-group">
                    <label for="">Sélectionnez d'un article:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>



                <?php echo form_submit($btn_rem); ?>

            </form>
</div>
</div>
			            <!-- Formulaire de changement de titre d'un article -->

<div class="jumbotron jumbotron-fluid">		
<div class="col ">		
            <form action="<?= base_url().'C_Veille/change_titre' ?>" method="POST" role="form">
                <legend>Changement du titre de l'article</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un article</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>
                
                <div class="form-group">
                    <label for="">Nouveau titre:</label>
                    <?php  echo form_input($new_titre); ?>

                </div>



                <?php echo form_submit($btn_ch_titre); ?>

            </form>
</div>	
</div>		
						<!-- Formulaire de changement de lien d'un article -->

<div class="jumbotron jumbotron-fluid">	
<div class="col ">			
            <form action="<?= base_url().'C_Veille/change_lien' ?>" method="POST" role="form">
                <legend>Changement lien de projet</legend>

                <div class="form-group"> 
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau lien:</label>
                    <?php  echo form_input($new_lien); ?>

                </div>

                <?php echo form_submit($btn_ch_lien); ?>

            </form>
</div>		
</div>	
		            <!-- Formulaire de changement de corp de l'article -->

<div class="jumbotron jumbotron-fluid">			
<div class="col ">	
            <form action="<?= base_url().'C_Veille/change_corp' ?>" method="POST" role="form">
                <legend>Changement du corp de l'article</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un article:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau corp:</label>
                    <?php  echo form_input($new_corp); ?>

                </div>

                <?php echo form_submit($btn_ch_corp); ?>

            </form>
</div>
</div>
			 <!-- Formulaire de changement de l'auteur de l'article -->
<div class="jumbotron jumbotron-fluid">		
<div class="col ">	
			
            <form action="<?= base_url().'C_Veille/change_auteur' ?>" method="POST" role="form">
                <legend>Changement de l'auteur de l'article</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un article:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouvel auteur:</label>
                    <?php  echo form_input($new_auteur); ?>

                </div>



                <?php echo form_submit($btn_ch_auteur); ?>

            </form>
			
		</div>			
	</div>	
	
	
<?php
	    $optionsMessage = array();
    for ($i = 1; $i <= $nb_messages; $i++) {
        $id = $messages["Message$i"]->id_Message;
       
    }
	
	
	 $btn_mess = array(
        'name'          => 'btn_mess',
        'id'            => 'btn_mess',
        'class'         => 'btn btn-primary',
        'value'         => 'Supprimer des messages'
    );
	
 ?>  

<div class="jumbotron jumbotron-fluid">		
<div class="col ">	
			
            <form action="<?= base_url().'C_Tableau_de_bord/sup_message' ?>" method="POST" role="form">
                <legend>Suppression des messages</legend>

               				 <div class="form-group">
                    <label for="">Messages:</label>

				
       <table border="2" cellpadding="15">
          <thead>
             <tr class="btn-primary">
                <th></th>
                <th>id_Message</th>
                <th>nom_Message</th>
				<th>prenom_Message</th>
				<th>mail_Message</th>              
				<th>objet_Message</th>
                <th>contenu_Message</th>
	
       
              </tr>
          </thead>
          <tbody>
            <?php foreach ($messages as $message) { ?>
              <tr>
                <td>
                  <input type="checkbox" name="id_Message[]" value="<?php echo $message->id_Message; ?>"> 
				   
                </td>
               
                <td><?php echo $message->id_Message; ?></td>
                <td><?php echo $message->nom_Message; ?></td>
                <td><?php echo $message->prenom_Message; ?></td>
				<td><?php echo $message->mail_Message; ?></td>
			    <td><?php echo $message->objet_Message; ?></td>
			    <td><?php echo $message->contenu_Message; ?></td>
             </tr>
           <?php $i++; } ?>
        
          </tbody>
        </table>

                </div>

                <?php echo form_submit($btn_mess); ?>

            </form>
			
		</div>			
	</div>	
	
	

<div class="jumbotron jumbotron-fluid">		
<div class="col ">		

</div>
</div>	


</div>

