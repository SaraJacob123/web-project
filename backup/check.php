<?php

include_once 'user-dbop.php';
	
    $objUser = new User();
    $objUser->login($_POST['email'], $_POST['password']);

?>