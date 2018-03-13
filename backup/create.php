<?php

include_once 'user-dbop.php';
echo "SUCCESSFULLY CREATED";
//echo $_POST['email'];
	
    $objUser = new User();
    $objUser->create($_POST['email'], $_POST['password']);
		header( "refresh:1;url=index.html" );


?>