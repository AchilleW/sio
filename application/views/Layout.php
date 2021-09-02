<!-- NAV -->
<ul class="nav md-tabs light-blue lighten-1 mx-0 mb-0 ">

    <?php
    // print_r($nav);

    for ($i = 0; $i < sizeof($nav); $i++) {
        $libelle = $nav[$i]->libelle;
        $lien = $nav[$i]->lien;
        echo "
        <li class='nav-item'>
            <a class='nav-link' target='blank' href='$lien'>$libelle</a>
        </li>
        ";
    }
    ?>
    
</ul>

<!-- /NAV -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title></title>
</head>

