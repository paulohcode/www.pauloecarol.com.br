<?php
	$server = "mysql524.umbler.com";
	$dbname = "casamento";
	$user = "ps008119ur";
	$pwd = "upx72856";

	try {
		
		$pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8",$user,$pwd);
		
	}catch (PDOException $erro){
		echo $erro->getMessage();
		exit;
	}