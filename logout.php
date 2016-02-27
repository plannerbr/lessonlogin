<?php
	if(isset($_REQUEST['sair'])){
		session_destroy();
		session_unset($_SESSION['usuariowil']);
		session_unset($_SESSION['senhawil']);
		header("Location: index.php");
	}