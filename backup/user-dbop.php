<?php

if (!isset($_SESSION))
    session_start();
include_once 'dbconnect.php';

class User {

    var $dbObj;

    public function __construct() {
        $this->dbObj = new db();
    }
	public function create($email, $password) {
		$sql = "INSERT INTO register(email,password) VALUES
		('$email', '$password')";
    return $this->dbObj->ExecuteQuery($sql, 2);
	}
	
	public function up($link) {
		$sql = "INSERT INTO img (path,date) VALUES
		('$link',now())";
    return $this->dbObj->ExecuteQuery($sql, 2);
	}
	
	public function login($email, $password) {
        
       $sql = " SELECT"
                . " email,password,id"
                . " FROM register WHERE"
                . " email = '$email' AND password = '$password'";
        $data = $this->dbObj->ExecuteQuery($sql, 1);
        if (mysqli_num_rows($data) > 0) {
            $fetch_data = mysqli_fetch_assoc($data);
			$_SESSION['id'] = $fetch_data['id'];
			header("location:profile.html");
		}
		else {
            echo "<script>window.location='index.php';alert('Invalid User Name or Password !!')</script>";
        }
	}


}
?>
		