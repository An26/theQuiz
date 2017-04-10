<?php

$title = "Home";
$title_es = "";
$name = "home";
$section = "general";

include('includes/header.php');

?>

<section id="quiz">

	<h1>Quiz Header</h1>
	
	<div id="progress">
	
		<div id="indicator"></div><!--indicator-->
		
		<div id="step">1 of 5</div>
	
	</div><!--progress-->

	<div id="questions"></div>
	
	<div id="results">
	
		<h3>Results headline</h3>
		
		<p>Results copy</p>
	
	</div><!--results-->

</section><!--quiz-->

<?php include('includes/footer.php'); ?>