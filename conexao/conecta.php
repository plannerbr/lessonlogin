<?php
	try{
		$conexao = new PDO('mysql:host=mysql.planner.net.br;dbname=planner01', 'planner01', 'pc654321');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $error){
		echo 'ERROR: ' . $error->getMessage();
	}