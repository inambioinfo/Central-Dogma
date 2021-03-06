<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>Central Dogma</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap theme -->
      <link href="bootstrap-theme.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="theme.css" rel="stylesheet">
      <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css"> -->
   </head>
   <body role="document">
      <div class="container theme-showcase" role="main">
	 <div class="jumbotron">
	    <h1>DNA to RNA to Protein</h1>
	    <p>The Central Dogma of Molecular Biology</p>
	 </div>
	 <div class="page-header">
	    <h1>DNA</h1>
	 </div>
	 <div class="row">
	    <div class="col-lg-14">
	       <form action="" method="post">
		  <div class="input-group">
		     <input type="text" name="DNA" class="form-control" value = <?php if (!empty($_POST)) {
		     echo strtoupper(escapeshellcmd($_POST['DNA']));} else {echo "";} ?> >

		     <span class="input-group-btn">
		     <button class="btn btn-default" type="submit">Start!</button>
		     </span>
		  </div><!-- /input-group -->
		  
	       </form>
	    </div>
	 </div>
	 <div class="page-header">
	    <h1>RNA</h1>
	 </div>
	 <div class="row">
	    <div class="col-lg-14">
	       <div class="well well-lg"> <p class="text-area">
		  <?php if (!empty($_POST)) {
		     $DNA = escapeshellcmd($_POST['DNA']);
		     
		     echo shell_exec('./transcribe "'.$DNA.'"');
		     }
		     ?>
		     </p>
	       </div>
	    </div>
	 </div>
	 <div class="page-header">
	    <h1>Protein</h1>
	 </div>
	 <div class="row">
	    <div class="col-lg-14">
	       <div class="well well-lg"> <p class="text-area">
		  <?php if (!empty($_POST))
		     {
		  $DNA = escapeshellcmd($_POST['DNA']);
		     echo shell_exec('./translate "'.$DNA.'"');
		  }
		     ?>
		     </p>
	       </div>
	    </div>
	 </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>