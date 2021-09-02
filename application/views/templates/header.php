<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; 
charset=utf-8">
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, 
initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
 crossorigin="anonymous">
        <!-- Style sheet -->
        <link rel="stylesheet" type="text/css" 
href="/css/generic.css">
        <link rel="stylesheet" type="text/css" 
href="/css/wh-min-max.css">
        <link rel="stylesheet" type="text/css" 
href="/css/bg-colors.css"> 
        <!-- Font awesome -->
        <link rel="stylesheet" 
href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
 crossorigin="anonymous">
        <!-- Google fonts -->
        <link 
href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" 
rel="stylesheet">

      
        <title><?= $headerTitle ?></title>
        <meta name="description" content="<?= $headerDescription 
?>"> 

    </head>
    <body>

        <div class="hmin-100-vh mt-1 mb-5">
            <div id="page-body" class="text-justify wmax-1200-px 
mx-auto my-0 py-0 px-md-0 px-2">

<!-- :::::::::::::::::::::::::::::::: TITLE 
:::::::::::::::::::::::::::::::: -->

                <?php if (isset($title)) { ?>
                <h1><?= $title; ?></h1>
                <?php } ?>