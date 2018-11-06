<?php 
	session_cache_expire(5);
	session_start();

	if(!isset($_SESSION["sistema"]["id"])){
		header("Location: index.php");
	}