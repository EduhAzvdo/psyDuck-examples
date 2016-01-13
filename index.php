<?php 
	
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	// 
	require_once "vendor/autoload.php";


	if (!count(debug_backtrace())):
?>

<!DOCTYPE html>
<html>
<head>
	<title> php psyDuck's example apps </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-2"> <!-- --> </div>
		<div class="col-md-8">
<h1	> php psyDuck's example apps </h1>
<p style="float:right"> each app is contained in their own folder </p>
<hr>
<?php foreach ( glob('*') as $folder ):  if(!is_dir($folder) || $folder=='vendor') continue; ?>
	<h3> &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?=$folder?>" > -> <?=$folder?> </a> </h3>
<?php endforeach; ?>
<br><br>
<hr>
<p> Developed by <a href="https://github.com/EduhAzvdo/" target="_blank" >EduhAzvdo</a>	</p>
		</div>
		<div class="col-md-2"> <!-- --> </div>
	</div>
</body>
</html>
<?php 

	endif;