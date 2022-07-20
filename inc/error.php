<?php
	// Проверка доступа к файлу
	if(!defined('CHECK')){
		die('No hacking!');
	}
	
	out(load_template("temp_error.php"));
?>