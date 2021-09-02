<div class="project-container container">

<div class="jumbotron bg-white">
<br>  
  <h1 class="display-4"><?php echo "$hi_msg, $nom" ?></h1>
  <p class="lead"><?php echo $desc ?></p>
  <hr class="my-4">
  <p> </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/achille-wuillaume-baa956199/" role="button">LinkedIn</a>
  </p>
  </br>
</div>

<form action="<?php echo base_url().'C_Accueil';?>" method="POST">
</br>
<center>
<p>
    <label for="lang">Selectionné une langue:</label>
    
    <input type="radio" name="lang" id="eng" value="ENG">
    <label for="eng">Anglais</label>
    
    <input type="radio" name="lang" id="fr" value="FR">
    <label for="fr">Français</label>
    <input type="submit" value="Changer">
</p>	
</center>
</br>
</form>
</div>