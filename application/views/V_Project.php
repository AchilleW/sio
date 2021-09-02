<div class="project-container container">
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
			<h1 class="display-4"><?php echo $title ?></h1>
			<p class="lead">
    </div>
    </div>
	<div class="jumbotron jumbotron-fluid">
    <center>
    <div class="row">
        
    <?php

    //generation visuel des projets
    for ($i = 1; $i <= $nb_projects; $i++) {
        $current_project = $projects["Project$i"];
        echo "
        <div class='col'>
            <div class='card ' style='width: 18rem;'>
                <img src='https://source.unsplash.com/random/400x200' class='card-img-top' alt='random img'>
                <div class='card-body'>
                    <h1 class='card-title'>$current_project->nom </h1>
                    <p class='card-text'>$current_project->description</p>
                    <a target='blank' href='$current_project->lien' class='btn btn-primary'>View project</a>
                </div>
            </div>
        </div>
        ";
    }


?>
      
    </div>
 </center> 
</div> 
</div>
