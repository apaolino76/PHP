<?php
    // Permite acesso via ajax de todos em qualquer navegador
	// Esse só funciona no Chrome => "header('Access-Control-Allow-Origin : *');"
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    }
	
	$logout = $_GET['logout'];
	
	session_start();
	session_unset();	
	session_destroy();
	
	if ($logout != '') {
		echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0; URL='".$logout."'\">";
	}
	
?>
