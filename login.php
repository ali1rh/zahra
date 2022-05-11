<?php 
session_start(); 
// include "db_conn.php";
include ('../con.php');


if (!@$con){ //||!@$selected
die('error connect to db');
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);


	$DefUser = "zahra";
    $DefPass = "jalilian";
    

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{

        if ($DefUser === $uname && $DefPass === $pass) {
            $_SESSION['unlock'] = 'unlock';
        	header("Location: home.php");
	        exit();
        }else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}

	}
	
}else{
	header("Location: index.php");
	exit();
}