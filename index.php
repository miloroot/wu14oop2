<?php

	include_once("classes/base.class.php");
	include_once("classes/nerd.class.php");
	include_once("classes/javascriptnerd.class.php");
	include_once("classes/designnerd.class.php");
	include_once("classes/phpnerd.class.php");

	$designerGeek = new Nerd ("Designer Geek");
	$hotjs = new javascriptNerd ("Hot JavaScripter");

	if(isset($_REQUEST["fight"])){
		echo json_encode($hotjs->attack($designerGeek));
	}