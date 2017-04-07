<?php
require_once('customFunctions.php'); 
require_once('mobile.php');
$detect = new Mobile_Detect;

if($env != "live") {
	
	session_start();
	
	$lang = isset($_REQUEST['lang']) ? $_REQUEST['lang'] : null;
	
	if($lang == "en") {
		$_SESSION["lang"] = "en";
	} else if($lang == "es") {
		$_SESSION["lang"] = "es";
	}
	
	if(isset($_SESSION["lang"])) {
	
		if($_SESSION["lang"] == "es") {
			$lang = "es";
		} else {
			$lang = "en";
		}
	
	} else {
		
		$lang = "en";
			
	}
	
}
?>

<!doctype html>
<html lang="<?=$lang;?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if($lang == "en") { ?>

	<?php if($name == "home") { ?>
    <title>Site Name</title>
    <?php } else { ?>
    <title><?=$title;?> | Site Name</title>
    <?php } ?>

<?php } else { ?>

	<?php if($name == "home") { ?>
    <title>Spanish Site Name</title>
    <?php } else { ?>
    <title><?=$title_es;?> | Spanish Site Name</title>
    <?php } ?>

<?php } ?>

<?php if($lang == "en") { ?>
<meta name="description" content="Site description">
<?php } else { ?>
<meta name="description" content="Site description Spanish">
<?php } ?>

<?php if($detect->isTablet()) { ?>
<meta name="viewport" content="width=960, user-scalable=yes">
<?php } else { ?>
<meta name="viewport" content="width=500, user-scalable=yes">
<?php } ?>

<?php if($lang == "en") { ?>
<meta property="og:title" content="Site Name" />
<meta property="og:type" content="cause" />
<meta property="og:description" content="Site description" />
<meta property="og:url" content="<?=$url;?>" />
<meta property="og:image" content="<?=$url;?>/images/social.jpg" />
<meta property="og:site_name" content="Site Name" />
<?php } else if($lang == "es") { ?>
<meta property="og:title" content="Site Name Spanish" />
<meta property="og:type" content="cause" />
<meta property="og:description" content="Site description Spanish" />
<meta property="og:url" content="<?=$url;?>" />
<meta property="og:image" content="<?=$url;?>/images/social-es.jpg" />
<meta property="og:site_name" content="Site Name Spanish" />
<?php } ?>

<link rel="shortcut icon" type="image/x-icon" href="<?=$url;?>/images/favicon.ico" />
<link rel="stylesheet" media="all" href="<?=$url;?>/css/fonts.css" />
<link rel="stylesheet" media="all" href="<?=$url;?>/css/ui.css?v=<?=$version;?>" />
<link rel="stylesheet" media="all" href="<?=$url;?>/css/mobile.css?v=<?=$version;?>" />

<!-- Grab the latest of these two from scriptsrc.net and then delete this comment. -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

<a href="#" id="skip">Skip to content</a>

<header>

	<div id="language">

	<?php

	if($env == "live") {

		$current_page = $_SERVER['REQUEST_URI'];

		$translate_url = $translate_url . $current_page;

		if($lang == "en") {

			echo "<a href=\"$translate_url\">En Espa&ntilde;ol</a>";

		} else {

			echo "<a href=\"$translate_url\">In English</a>";

		}

	} else if($env == "local" || $env == "dev") {

		if($lang == "en") {

			echo '<a href="?lang=es">En Espa&ntilde;ol</a>';

		} else {

			echo '<a href="?lang=en">In English</a>';

		}

	}

	?>

	</div><!--language-->

</header>

<div id="wrapper">

	<a href="#" id="focus">Content begins here</a>
