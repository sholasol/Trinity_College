<?php
require_once 'core/init.php';

// 	$user->logout();
session_destroy();
	
	
//Redirect::to('index');

echo "<script>window.location.href='index'</script>";

?>