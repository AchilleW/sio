<div class="project-container container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $title ?></h1>
            <p class="lead"> </p>
        </div>
    </div>

<div class="jumbotron jumbotron-fluid">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="login col-md-4 mx-auto text-center">
		<h1>Connexion</h1>
		<form method="post" action="<?php echo base_url().'C_Admin/verify' ?>">
			<div class="form-group">
				<input type="text" name="login_Admin" placeholder="login" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="motDePasse" placeholder="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Identification Admin " class="btn btn-primary">
			</div>
			
		</form>
	</div>
</body>
</div>
</div>