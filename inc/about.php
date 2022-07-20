<?php
	// Проверка доступа к файлу
	if(!defined('CHECK')){
		die('No hacking!');
	}
	
	ob_start();
	require TEMPDIR.'temp_about.php';
	$content = ob_get_contents();
	ob_end_clean();
?>