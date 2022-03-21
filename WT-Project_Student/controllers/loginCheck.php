<?php 
	require_once('../models/db.php');
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		

	
		if($username != ""){
			if($password != ""){

				$status = login($username, $password);
                
				if($status){
					$_SESSION['status'] = true;
                    setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/Dashboard.php');
				}
				else{
					header('location: ../views/Login.php?msg=error');	
				}

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>
