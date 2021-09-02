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

    //generation visuel des articles
    for ($i = 1; $i <= $nb_articles; $i++) {
        $current_article = $articles["Article$i"];
        echo "
        <div class='col'>
            <div class='card ' style='width: 18rem;'>
                <img src='https://source.unsplash.com/random/400x200' class='card-img-top' alt='random img'>
                <div class='card-body'>
                    <h1 class='card-title'>$current_article->titre</h1>
				    <a target='blank' href='$current_article->lien' class='btn btn-primary'>View news</a>
                    <p class='card-text'>$current_article->corp</p>
					<h2 class='card-title'>$current_article->auteur</h2>
                   
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





